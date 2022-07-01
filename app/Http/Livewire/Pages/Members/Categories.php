<?php

namespace App\Http\Livewire\Pages\Members;

use App\Models\categories as ModelsCategories;
use App\Models\categories_sub;
use Livewire\Component;

class Categories extends Component
{
    public $categories_id, $categories_subs_id;

    public $getCategories = [];
    public function render()
    {
        $categories = ModelsCategories::all();
        if($this->categories_id){
            $this->getCategoriesSubs = categories_sub::where('id_categories', $this->categories_id)->get();
        }
        return view('livewire.pages.members.categories', ['categories' => $categories]);
    }
}
