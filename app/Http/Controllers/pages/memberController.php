<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class memberController extends Controller
{
    // show index
    public function index()
    {
        return view('pages.member.index');
    }
}
