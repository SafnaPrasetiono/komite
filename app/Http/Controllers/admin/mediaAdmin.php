<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\galleries;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class mediaAdmin extends Controller
{
    // show gallery
    public function gallery()
    {
        return view('admin.media.gallery');
    }

    public function galleryPost(Request $request)
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
                    'label' => $originName,
                    'size' => $size,
                    'extension' => $extension,
                    'images' => $newImagesNames,
                ]);
                $resorces->storeAs('/images/galleries/',  $newImagesNames, 'myLocal');
            }
            return redirect()->back()->with('success', 'Data telah disimpan!');
        }

        return view('admin.media.gallery');
    }

    public function video()
    {
        return view('admin.media.video');
    }
}
