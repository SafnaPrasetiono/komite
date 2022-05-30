<?php

namespace App\Http\Livewire\Admin\Galleries;

use App\Models\galleries;
use Livewire\Component;

class DataImages extends Component
{
    public $id_content;
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
            session()->flash('success', 'Data telah terhapus!');
        }else{
            session()->flash('error', 'Data gagal terhapus!');
        }
    }

    public function mount($id)
    {
        $this->id_content = $id;
    }

    public function render()
    {
        $data = galleries::where('id_galleries_contents', $this->id_content)->orderBy('created_at', 'desc')->get();
        return view('livewire.admin.galleries.data-images', ['data' => $data]);
    }
}
