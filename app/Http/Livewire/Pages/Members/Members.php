<?php

namespace App\Http\Livewire\Pages\Members;

use App\Models\members as ModelsMembers;
use Livewire\Component;

class Members extends Component
{
    public function render()
    {
        $data = ModelsMembers::where('validate', 1)->orderBy('created_at', 'desc')->limit(6)->get();
        return view('livewire.pages.members.members', ['data' => $data]);
    }
}
