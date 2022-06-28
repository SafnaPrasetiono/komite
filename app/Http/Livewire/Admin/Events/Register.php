<?php

namespace App\Http\Livewire\Admin\Events;

use Livewire\Component;
use Livewire\WithPagination;

class Register extends Component
{
    use WithPagination;
    public $events_id;
    public function mount($post)
    {
        $this->events_id = $post;
    }
    public function render()
    {
        $data = 0;
        return view('livewire.admin.events.register', ['data' => $data]);
    }
}
