<?php

namespace App\Http\Livewire\Pages\Events;

use App\Models\events_register;
use Livewire\Component;
use Livewire\WithPagination;

class Member extends Component
{
    use WithPagination;

    public $id_events;

    public function mount($post)
    {
        $this->id_events = $post;
    }
    public function render()
    {
        $data = events_register::where('events_id', $this->id_events)->paginate(20);
        return view('livewire.pages.events.member', ['data' => $data]);
    }
}
