<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\Videos as ModelsVideos;
use Livewire\Component;

class Videos extends Component
{
    public function render()
    {
        $data = ModelsVideos::orderby('created_at', 'desc')->limit(6)->get();
        return view('livewire.pages.index.videos',['data' => $data]);
    }
}
