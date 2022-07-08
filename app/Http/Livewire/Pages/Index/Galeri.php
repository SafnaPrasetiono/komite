<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\galleries;
use App\Models\galleries_content;
use Illuminate\Support\Arr;
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
        $data = [];
        $content = galleries_content::where('publish', 1)->orderBy('date_start', 'desc')->get();
        foreach ($content as $value) {
            $images = galleries::where('id_galleries_contents', $value->id_galleries_contents)->get();
            foreach($images as $img){
                array_push($data, $img);
            }
        }
        // dd($content);
        // dd($data);
        return view('livewire.pages.index.galeri', ['data' => $data]);
    }
}
