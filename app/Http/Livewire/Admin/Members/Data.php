<?php

namespace App\Http\Livewire\Admin\Members;

use App\Models\Members;
use App\Models\MembersAddress;
use App\Models\MembersCategories;
use App\Models\MembersDocuments;
use App\Models\MembersPermissions;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    public $search;
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
            MembersPermissions::where('members_id', $data->id_members)->delete();
            $data->delete();
            $this->dispatchBrowserEvent('success', 'Data member berhasil dihapus');
        }else {
            $this->dispatchBrowserEvent('error', 'Oops, data sudah tidak ada atau mungkin sudah terhapus!');
        }
    }
    public function render()
    {
        if($this->search){
            $data = members::where('username', $this->search)->orderBy('created_at', 'desc')->paginate(12);
        } else {
            $data = members::orderBy('created_at', 'desc')->paginate(12);
        }
        return view('livewire.admin.members.data', ['data' => $data]);
    }
}
