<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\events;
use App\Models\galleries;
use App\Models\galleries_content;
use App\Models\Members;
use App\Models\news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class indexAdmin extends Controller
{
    // show dashboard
    public function index(){
        $news = news::count();
        $events = events::count();
        $gallery = galleries_content::count();
        $members = Members::count();
        return view('admin.index', [
            'news' => $news,
            'events' => $events,
            'gallery' => $gallery,
            'members' => $members,
            
        ]);
    }

    public function logout()
    {
        if(Auth::guard('admin')->check()){
            Auth::guard('admin')->logout();
            return redirect()->route('index');
        }
    }

}
