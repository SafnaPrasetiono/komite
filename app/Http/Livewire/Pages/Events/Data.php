<?php

namespace App\Http\Livewire\Pages\Events;

use App\Models\events;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    public function render()
    {
        $data = events::orderBy('created_at', 'desc')->paginate(20);
        return view('livewire.pages.events.data', ['data' => $data]);
    }
}
