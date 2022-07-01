<?php

namespace App\Http\Livewire\Pages\Members;

use App\Models\members;
use Livewire\Component;

class Checking extends Component
{
    public $code;
    public $data;

    protected $rules = [
        'code' => 'required',
    ];

    protected $messages = [
        'code.required' => 'Masukan kode pendaftaran anda',
    ];

    public function store()
    {
        $this->validate();
        $this->data = members::where('code', $this->code)->first();
        if($this->data){
            $this->dispatchBrowserEvent('showModal');
        } else {
            $this->dispatchBrowserEvent('showModalError');
        }
    }
    public function render()
    {
        return view('livewire.pages.members.checking');
    }
}
