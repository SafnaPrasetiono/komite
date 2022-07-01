<?php

namespace App\Http\Livewire\Pages\Index;

use App\Models\Members;
use Livewire\Component;

class CountMembers extends Component
{
    public $all, $active, $pasive;
    public function render()
    {
        $this->all = Members::count();
        $this->active = Members::where('validate', 1)->count();
        $this->pasive = Members::where('validate', 0)->count();
        return view('livewire.pages.index.count-members');
    }
}
