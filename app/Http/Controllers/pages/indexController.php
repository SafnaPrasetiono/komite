<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class indexController extends Controller
{
    // show index
    public function index(){
        return view('pages.index');
    }

    public function aboutus(){
        return view('pages.about');
    }

    public function members(){
        return view('pages.members');
    }
}
