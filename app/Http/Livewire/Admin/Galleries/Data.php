<?php

namespace App\Http\Livewire\Admin\Galleries;

use App\Models\galleries;
use App\Models\galleries_content;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    public $post_id;

    protected $listeners = ["deleteAction" => "delete"];

    public function removed($id)
    {
        $this->post_id = $id;
        $this->dispatchBrowserEvent('deleteConfrimed');
    }

    public function delete()
    {
        $data = galleries_content::find($this->post_id);
        if ($data) {
            galleries::where('id_galleries_contents', $data->id_galleries_contents)->delete();
            $data->delete();
            $this->dispatchBrowserEvent('success', 'Data has been delete!');
        } else {
            $this->dispatchBrowserEvent('error', 'sorry something problem in database!');
        }
    }
    
    public function render()
    {
        $data = galleries_content::orderBy('created_at')->paginate(24);
        return view('livewire.admin.galleries.data', ['data' => $data]);
    }
}
