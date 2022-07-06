<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\Videos as ModelsVideos;
use Livewire\Component;

class Videos extends Component
{
    public function render()
    {
        $mars = ModelsVideos::where('title', 'mars kopitu')->first();
        $data = ModelsVideos::orderby('created_at', 'desc')->limit(3)->get();
        return view('livewire.pages.index.videos',[
            'mars' => $mars,
            'data' => $data,
        ]);
    }
}
