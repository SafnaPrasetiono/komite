<?php

namespace App\Http\Livewire\Pages\Gallery;

use App\Models\galleries;
use App\Models\galleries_content;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    public $search;

    public function render()
    {
        if($this->search){
            $data = galleries_content::where('publish', 1)->where('title', $this->search)->orderBy('created_at', 'desc')->paginate(12);
        }else {
            $data = galleries_content::where('publish', 1)->orderBy('created_at', 'desc')->paginate(12);
        }
        return view('livewire.pages.gallery.data', ['data' => $data]);
    }
}
