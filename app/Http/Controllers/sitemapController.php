<?php

namespace App\Http\Controllers;

use App\Models\events;
use App\Models\news;
use Illuminate\Http\Request;

class sitemapController extends Controller
{
    // show sitemap pages
    public function sitemap()
    {
        $news = news::orderBy('created_at', 'desc')->get();
        $events = events::orderBy('created_at', 'desc')->get();
        return response()->view('sitemap', [
            'news' => $news,
            'events' => $events,
        ])->header('Content-Type', 'text/xml');
    }
}
