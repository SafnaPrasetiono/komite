<?php

namespace App\Http\Livewire\Pages\Media;

use App\Models\galleries;
use Livewire\Component;
use Livewire\WithPagination;

class Gallery extends Component
{
    use WithPagination;
    public $detail;

    public function show($id)
    {
        $this->detail = galleries::find($id);
        $this->dispatchBrowserEvent('showModals');
    }

    public function render()
    {
        $data = galleries::orderBy('created_at')->paginate(11);
        return view('livewire.pages.media.gallery', ['data' => $data]);
    }
}
