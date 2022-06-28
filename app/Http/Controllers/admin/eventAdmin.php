<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class eventAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.events.index');
    }

    public function create()
    {
        return view('admin.events.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'        => 'required',
            'dates'      => 'required',
            'times'      => 'required',
            'date_start'      => 'required',
            'date_end'      => 'required',
            'description'  => 'required',
            'content'      => 'required',
            'images'       => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'imagesMultiple.*'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'title.required'        => 'Please input field title events',
            'dates.required'        => 'Please input date schedule',
            'times.required'        => 'Please input time schedule',
            'date_start.required'   => 'Please input date events',
            'date_end.required'     => 'Please input end date events',
            'description.required'  => 'Please input field description events',
            'content.required'      => 'Please input field content events',
            'images.required'       => 'Please upload images',
            'images.image'          => 'File is not images',
            'images.mimes'          => 'File must be images',
            'images.max'            => 'File images oversized',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // slug from title
            $slug = Str::slug($request->title);
            // images 
            $resorce = $request->images;
            $originNamaImages = $resorce->getClientOriginalName();
            $NewNameImage = "IMG-" . substr(md5($originNamaImages . date("YmdHis")), 0, 14);
            $namasamplefoto = $NewNameImage . "." . $resorce->getClientOriginalExtension();
            // schedule
            $schedule = $request->dates . ' ' . date('H:i:s', strtotime($request->times));

            $data = new events();
            $data->title = $request->title;
            $data->slug = $slug;
            $data->schedule = $schedule;
            $data->date_start = $request->date_start;
            $data->date_end = $request->date_end;
            $data->description = $request->description;
            $data->content = $request->content;
            $data->images = $namasamplefoto;
            $resorce->move(public_path() . "/images/events/", $namasamplefoto);
            if ($data->save()) {
                return redirect()->route('admin.events')->with('success', 'news data saved successfully');
            } else {
                return redirect()->back()->with('error', 'sorry database is busy try again letter');
            }
        }
    }

    // public function show($id)
    // {
    //     $data= news::find($id);
    //     return view('admin.news.edit', [
    //         'data' => $data
    //     ]);
    // }

    public function edit($id)
    {
        $data = events::find($id);
        return view('admin.events.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title'        => 'required',
            'dates'      => 'required',
            'times'      => 'required',
            'date_start'      => 'required',
            'date_end'      => 'required',
            'description'  => 'required',
            'content'      => 'required',
            // 'imagesMultiple.*'  => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ], [
            'title.required'        => 'Please input field title events',
            'dates.required'        => 'Please input date schedule',
            'times.required'        => 'Please input time schedule',
            'date_start.required'   => 'Please input date events',
            'date_end.required'     => 'Please input end date events',
            'description.required'  => 'Please input field description events',
            'content.required'      => 'Please input field content events',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // slug from title
            $slug = Str::slug($request->title);
            // schedule
            $schedule = $request->dates . ' ' . date('H:i:s', strtotime($request->times));
            if ($request->images) {
                $validImages = Validator::make($request->all(), [
                    'images'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:4512',
                ], [
                    'images.image'          => 'File is not images',
                    'images.mimes'          => 'File must be images',
                    'images.max'            => 'File images oversized',
                ]);
                if ($validImages->fails()) {
                    return redirect()->back()->withErrors($validImages)->withInput();
                } else {
                    // images 
                    $resorce = $request->images;
                    $originNamaImages = $resorce->getClientOriginalName();
                    $NewNameImage = "IMG-" . substr(md5($originNamaImages . date("YmdHis")), 0, 14);
                    $namasamplefoto = $NewNameImage . "." . $resorce->getClientOriginalExtension();
                    // update with images
                    $data = events::find($id);
                    $data->title = $request->title;
                    $data->slug = $slug;
                    $data->schedule = $schedule;
                    $data->date_start = $request->date_start;
                    $data->date_end = $request->date_end;
                    $data->description = $request->description;
                    $data->content = $request->content;
                    $data->images = $namasamplefoto;
                    $resorce->move(public_path() . "/images/events/", $namasamplefoto);
                    if ($data->save()) {
                        return redirect()->route('admin.events')->with('success', 'news data saved successfully');
                    } else {
                        return redirect()->back()->with('error', 'sorry database is busy try again letter');
                    }
                }
            } else {
                // update no images
                $data = events::find($id);
                $data->title = $request->title;
                $data->slug = $slug;
                $data->schedule = $schedule;
                $data->date_start = $request->date_start;
                $data->date_end = $request->date_end;
                $data->description = $request->description;
                $data->content = $request->content;
                if ($data->save()) {
                    return redirect()->route('admin.events')->with('success', 'news data saved successfully');
                } else {
                    return redirect()->back()->with('error', 'sorry database is busy try again letter');
                }
            }
        }
    }

    public function destroy($id)
    {
        //
    }

    public function editor()
    {
        // 
    }
}
