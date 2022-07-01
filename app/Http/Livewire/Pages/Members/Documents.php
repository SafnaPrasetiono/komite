<?php

namespace App\Http\Livewire\Pages\Members;

use Livewire\Component;
use Livewire\WithFileUploads;

class Documents extends Component
{
    use WithFileUploads;
    public $ktp, $kk, $photo, $akte;

    public function render()
    {
        return view('livewire.pages.members.documents');
    }
}
