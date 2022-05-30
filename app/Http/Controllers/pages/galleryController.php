<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\galleries_content;
use Illuminate\Http\Request;

class galleryController extends Controller
{
    // show index and data
    public function index()
    {
        return view('pages.gallery');
    }
}
