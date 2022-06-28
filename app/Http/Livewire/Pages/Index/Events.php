<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\events as ModelsEvents;
use Livewire\Component;

class Events extends Component
{
    public function render()
    {
        $data = ModelsEvents::orderBy('created_at', 'desc')->limit(4)->get();
        return view('livewire.pages.index.events',['data' => $data]);
    }
}
