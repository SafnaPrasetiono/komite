<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\galleries;
use App\Models\galleries_content;
use Livewire\Component;

class Galeri extends Component
{
    // use WithPagination;
    public $detail;

    public function show($id)
    {
        $this->detail = galleries::find($id);
        $this->dispatchBrowserEvent('showModals');
    }

    public function render()
    {
        $data = galleries::orderBy('created_at', 'desc')->limit(11)->get();
        return view('livewire.pages.index.galeri', ['data' => $data]);
    }
}
