<?php

namespace App\Http\Livewire\Admin\News;

use App\Models\news;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    public $id_news;
    public $search, $pages;

    protected $listeners = ["deleteAction" => "delete"];

    public function removed($id){
        $this->id_news = $id;
        $this->dispatchBrowserEvent('deleteConfrimed');
    }

    public function delete()
    {
        $data = news::find($this->id_news);
        if ($data) {
            $data->delete();
            return session()->flash('success', 'Data has been delete!');
        } else {
            return session()->flash('error', 'sorry something problem in database!');
        }
    }

    public function mount()
    {
        $this->pages = 25;
    }
    
    public function render()
    {
        if($this->search){
            $data = news::where('title', 'like', '%'. $this->search . '%')->orderBy('created_at', 'desc')->paginate($this->pages);
        } else {
            $data = news::orderBy('created_at', 'desc')->paginate($this->pages);
        }
        return view('livewire.admin.news.data', [
            'data' => $data
        ]);
    }
}
