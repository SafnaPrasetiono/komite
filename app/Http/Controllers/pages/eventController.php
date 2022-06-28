<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\events;
use Illuminate\Http\Request;

class eventController extends Controller
{
    // Show Index Pages
    public function index()
    {
        return view('pages.events.index');
    }

    public function detail($slug)
    {
        $data = events::where('slug', $slug)->first();
        return view('pages.events.detail', ['data' => $data]);
    }
}
