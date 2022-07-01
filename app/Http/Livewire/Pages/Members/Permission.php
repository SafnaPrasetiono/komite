<?php

namespace App\Http\Livewire\Pages\Members;

use Livewire\Component;

class Permission extends Component
{
    public $ud, $siup, $halal, $bpom, $pirt, $nib, $sku, $izin;

    public function render()
    {
        return view('livewire.pages.members.permission');
    }
}
