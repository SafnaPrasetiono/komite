<?php

namespace App\Http\Livewire\Pages\Gallery;

use App\Models\galleries;
use Livewire\Component;

class Images extends Component
{
    public $id_galleries_contents;
    public $data;

    public function mount($post)
    {
        $this->id_galleries_contents = $post->id_galleries_contents;
    }

    public function showImages($id)
    {
        $this->data = galleries::find($id);
        // dd($this->data);
        $this->dispatchBrowserEvent('showModals');
    }

    public function render()
    {
        $images = galleries::where('id_galleries_contents', $this->id_galleries_contents)->get();
        return view('livewire.pages.gallery.images', ['images' => $images]);
    }
}
