<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\news;
use Illuminate\Http\Request;

class newsController extends Controller
{
    // show news pages
    public function index(){
        return view('pages.news.index');
    }
    public function detail($slug){
        $data = news::where('slug', $slug)->first();
        return view('pages.news.detail', ['data'=>$data]);
    }
}
