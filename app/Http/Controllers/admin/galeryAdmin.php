<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\galleries;
use App\Models\galleries_content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class galeryAdmin extends Controller
{
    // show index galery
    public function index()
    {
        return view('admin.gallery.index');
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function post(Request $request)
    {
        // dd($request->all());
        $validations = Validator::make($request->all(), [
            'title' => 'required',
            'locations' => 'required',
            'venue' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'description' => 'required',
        ]);

        if ($validations->fails()) {
            return redirect()->back()->withErrors($validations)->withInput();
        } else {
            $slug = Str::slug($request->title);
            $data = galleries_content::create([
                'title' => $request->title,
                'slug' => $slug,
                'locations' => $request->locations,
                'venue' => $request->venue,
                'date_start' => $request->date_start,
                'date_end' => $request->date_end,
                'description' => $request->description,
            ]);
            if ($data) {
                return redirect()->route('admin.gallery.create.images', ['id' => $data['id_galleries_contents']]);
            } else {
                return redirect()->back()->with('errors', 'Oops, maaf database sedang sibuk ulangi nanti!');
            }
        }
    }

    public function images($id)
    {
        $data = galleries::where('id_galleries_contents', $id)->get();
        return view('admin.gallery.images', [
            'data' => $data,
            'id' => $id
        ]);
    }

    public function imagesPost(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'images.*'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5120'
        ], [
            'images.*.required' => 'Setidaknya masukan gambar!',
            'images.*.image' => 'Oops file must be images!',
            'images.*.mimes' => 'Images format must be images!',
            'images.*.max' => 'Oops images oversize!',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Oops error in images files');
        } else {
            // dd($request->all());
            foreach ($request->file('images') as $photo) {
                $resorces = $photo;
                $originFullName = $resorces->getClientOriginalName();
                $originName = pathinfo($originFullName, PATHINFO_FILENAME);;
                $extension = $resorces->getClientOriginalExtension();
                $size = $resorces->getSize();
                $newImagesNames = "BNR-" . substr(md5($originName . date("YmdHis")), 0, 28) . '.' . $extension;

                galleries::create([
                    'name_galleries' => $originName,
                    'size' => $size,
                    'extension' => $extension,
                    'location' => $newImagesNames,
                    'id_galleries_contents' => $id,
                ]);
                $resorces->storeAs('/images/galleries/',  $newImagesNames, 'myLocal');
            }
            return redirect()->back()->with('success', 'Data telah disimpan!');
        }
    }

    public function finish($id)
    {
        return view('admin.gallery.finish', ['id' => $id]);
    }

    public function publish(Request $request, $id)
    {
        if ($request->publish == true) {
            $data = galleries_content::find($id);
            $data->publish = 1;
            if ($data->save()) {
                return redirect()->route('admin.gallery')->with('success', 'Yay, data telah disimpan dan telah dipublish!');
            } else {
                return redirect()->back()->with('error', 'Oops, database sedang sibuk ulangi nanti!');
            }
        } else {
            $data = galleries_content::find($id);
            $data->publish = 0;
            if ($data->save()) {
                return redirect()->route('admin.gallery')->with('success', 'Data gallery tidak dipublish!');
            } else {
                return redirect()->back()->with('error', 'Oops, database sedang sibuk ulangi nanti!');
            }
        }
    }

    public function edit($id)
    {
        $content = galleries_content::find($id);
        return view('admin.gallery.edit', ['content' => $content]);
    }

    public function update(Request $request, $id)
    {
        $validations = Validator::make($request->all(), [
            'title' => 'required',
            'locations' => 'required',
            'venue' => 'required',
            'date_start' => 'required',
            'date_end' => 'required',
            'description' => 'required',
        ]);

        if ($validations->fails()) {
            return redirect()->back()->withErrors($validations)->withInput();
        } else {
            $slug = Str::slug($request->title);
            $data = galleries_content::find($id);
            $data->title        = $request->title;
            $data->slug         = $slug;
            $data->locations    = $request->locations;
            $data->venue        = $request->venue;
            $data->date_start   = $request->date_start;
            $data->date_end     = $request->date_end;
            $data->description  = $request->description;
            if ($data->save()) {
                return redirect()->back()->with('success', 'Yay, Data galei telah terupdate!');
            } else {
                return redirect()->back()->with('errors', 'Oops, maaf database sedang sibuk ulangi nanti!');
            }
        }
    }
}
