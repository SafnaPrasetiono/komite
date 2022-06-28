<?php

namespace App\Http\Livewire\Admin\Media;

use App\Models\galleries;
use Livewire\Component;

class Gallery extends Component
{
    public $id_galleries;

    protected $listeners = [
        "deleteAction" => "delete"
    ];

    public function remove($id)
    {
        $this->id_galleries = $id;
        $this->dispatchBrowserEvent('deleteConfrimed');
    }
    
    public function delete(){
        $data = galleries::find($this->id_galleries);
        if($data->delete()){
            $this->dispatchBrowserEvent('success', 'Data telah terhapus!');
        }else{
            $this->dispatchBrowserEvent('error', 'Data gagal terhapus!');
        }
    }

    public function render()
    {
        $data = galleries::all();
        return view('livewire.admin.media.gallery', ['data' => $data]);
    }
}
