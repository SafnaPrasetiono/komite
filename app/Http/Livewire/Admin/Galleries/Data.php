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
    public $search, $pages;

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

    public function mount()
    {
        $this->pages = 25;
    }
    
    public function render()
    {
        if($this->search){
            $data = galleries_content::where('title', 'like', '%'. $this->search .'%')->orderBy('date_start', 'desc')->paginate($this->pages);
        } else {
            $data = galleries_content::orderBy('date_start', 'desc')->paginate($this->pages);
        }
        return view('livewire.admin.galleries.data', ['data' => $data]);
    }
}
