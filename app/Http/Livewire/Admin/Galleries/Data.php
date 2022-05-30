<?php

namespace App\Http\Livewire\Admin\Galleries;

use App\Models\galleries_content;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    
    public function render()
    {
        $data = galleries_content::orderBy('created_at')->paginate(24);
        return view('livewire.admin.galleries.data', ['data' => $data]);
    }
}
