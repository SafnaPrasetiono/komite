<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\galleries;
use App\Models\galleries_content;
use Livewire\Component;

class Galeri extends Component
{
    public $img;

    protected $listeners = ['showModals'];

    public function showModals($data)
    {
        $this->img = galleries::find($data);
        $this->dispatchBrowserEvent('showModals');
    }

    public function render()
    {
        $data = galleries_content::where('publish', true)->orderBy('created_at', 'desc')->limit(3)->get();
        return view('livewire.pages.index.galeri', ['data' => $data]);
    }
}
