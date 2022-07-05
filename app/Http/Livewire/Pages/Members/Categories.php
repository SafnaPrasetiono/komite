<?php

namespace App\Http\Livewire\Pages\Members;

use App\Models\categories as ModelsCategories;
use App\Models\categories_sub;
use Livewire\Component;

class Categories extends Component
{
    public $categories_id, $categories_subs_id;
    public $ud, $siup, $halal, $bpom, $pirt, $nib, $sku, $izin;

    public $getCategories = [];
    public function render()
    {
        return view('livewire.pages.members.categories');
    }
}
