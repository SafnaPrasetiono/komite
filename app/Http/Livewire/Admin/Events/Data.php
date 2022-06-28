<?php

namespace App\Http\Livewire\Admin\Events;

use App\Models\events;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    public $id_events;

    protected $listeners = ["deleteAction" => "delete"];

    public function removed($id){
        $this->id_events = $id;
        $this->dispatchBrowserEvent('deleteConfrimed');
    }

    public function delete()
    {
        $data = events::find($this->id_events);
        if ($data) {
            $data->delete();
            $this->dispatchBrowserEvent('success', 'Data has been delete!');
        } else {
            $this->dispatchBrowserEvent('error', 'sorry something problem in database!');
        }
    }
    public function render()
    {
        $data = events::orderBy('created_at', 'desc')->paginate(12);
        return view('livewire.admin.events.data', ['data' => $data]);
    }
}
