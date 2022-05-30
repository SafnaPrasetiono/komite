<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\banners as ModelsBanners;
use Livewire\Component;

class Banners extends Component
{
    public function render()
    {
        $data = ModelsBanners::all();
        return view('livewire.pages.index.banners', ['data'=>$data]);
    }
}
