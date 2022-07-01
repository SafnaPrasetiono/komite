<?php

namespace App\Http\Livewire\Admin\Members;

use App\Models\members;
use App\Models\members_address;
use App\Models\members_categories;
use App\Models\members_documents;
use App\Models\members_permission;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    public $members_id;

    protected $listeners = ['deleteAction' => 'delete'];

    public function remove($id)
    {
        $this->members_id = $id;
        $this->dispatchBrowserEvent('deleteConfrimed');
    }
    public function delete()
    {
        $data = members::find($this->members_id);
        if($data){
            members_address::where('members_id', $data->id_members)->delete();
            members_categories::where('members_id', $data->id_members)->delete();
            members_documents::where('members_id', $data->id_members)->delete();
            members_permission::where('members_id', $data->id_members)->delete();
            $data->delete();
            $this->dispatchBrowserEvent('success', 'Data member berhasil dihapus');
        }else {
            $this->dispatchBrowserEvent('error', 'Oops, data sudah tidak ada atau mungkin sudah terhapus!');
        }
    }
    public function render()
    {
        $data = members::orderBy('created_at', 'desc')->paginate(12);
        return view('livewire.admin.members.data', ['data' => $data]);
    }
}
