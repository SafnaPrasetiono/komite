<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\events;
use App\Models\events_register;
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
        $registrar = events_register::where('events_id', $data->id_events)->count();
        return view('pages.events.detail', ['data' => $data, 'registrar' => $registrar]);
    }
}
