<?php

namespace App\Http\Livewire\Admin\Members;

use App\Models\members;
use Livewire\Component;

class Validate extends Component
{
    public $id_members;
    public $members;
    public $status;
    public function mount($post)
    {
        $this->id_members = $post;
        $this->members = members::find($post);
    }
    public function trems()
    {
        $this->dispatchBrowserEvent('showModals');
    }
    public function valid()
    {
        $this->dispatchBrowserEvent('validModals');
    }
    public function store()
    {
        $data = members::find($this->id_members);
        if($data){
            $data->validate = 1;
            $data->save();
            $this->dispatchBrowserEvent('success', 'Data members sudah divalidasi');
        }else {
            $this->dispatchBrowserEvent('error', 'Data sedang sibuk ulangi nanti!');
        }
        $this->dispatchBrowserEvent('expandModals');
    }
    public function render()
    {
        return view('livewire.admin.members.validate');
    }
}
