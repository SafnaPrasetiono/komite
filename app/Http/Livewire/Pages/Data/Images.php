<?php

namespace App\Http\Livewire\Pages\Data;

use App\Models\galleries;
use Livewire\Component;

class Images extends Component
{
    public $id_galleries_contents;
    public $img;

    public function mount($post)
    {
        $this->id_galleries_contents = $post->id_galleries_contents;
    }

    public function show($id)
    {
        $this->img = galleries::find($id);
        $this->dispatchBrowserEvent('showModals');
        // $this->emit('showModals', $id);
    }

    public function render()
    {
        $images = galleries::where('id_galleries_contents', $this->id_galleries_contents)->get();
        return view('livewire.pages.data.images', ['images' => $images]);
    }
}
