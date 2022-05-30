<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class bannersAdmin extends Controller
{
    // show index banners
    public function index(){
        return view('admin.banners.index');
    }
}
