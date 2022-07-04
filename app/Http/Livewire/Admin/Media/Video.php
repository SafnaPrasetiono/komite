<?php

namespace App\Http\Livewire\Admin\Media;

use App\Models\Videos;
use Livewire\Component;
use Livewire\WithPagination;

class Video extends Component
{
    use WithPagination;
    public $id_videos;
    public $title, $links;

    protected $listeners = ["deleteAction" => "delete"];

    protected $rules = [
        'title'     => 'required',
        'links'     => 'required',
    ];

    protected $messages = [
        'title.required' => 'Oops, Judul video masih kosong!',
        'links.required' => 'Oops, Link video tidak boleh kosong!',
    ];

    public function show()
    {
        $this->links = '';
        $this->title = '';
        $this->dispatchBrowserEvent('showModals');
    }

    public function store()
    {
        $this->validate();

        $data = new Videos();
        $data->title = $this->title;
        $data->links = $this->links;
        if($data->save()){
            $this->dispatchBrowserEvent('success', 'Data video telah ditambahkan');
        }else{
            $this->dispatchBrowserEvent('error', 'Oops, Database sedang bermasalah ulangi nanti!');
        }
        $this->dispatchBrowserEvent('hideModals');
    }

    public function removed($id)
    {
        $this->id_videos = $id;
        $this->dispatchBrowserEvent('deleteConfrimed');
    }
    public function delete()
    {
        $data = Videos::find($this->id_videos);
        if($data->delete()){
            $this->dispatchBrowserEvent('success', 'Data video telah dihapus');
        }else{
            $this->dispatchBrowserEvent('error', 'Oops, Database sedang bermasalah ulangi nanti!');
        }
    }

    public function render()
    {
        $data = Videos::orderBy('created_at', 'desc')->paginate(12);
        return view('livewire.admin.media.video', ['data' => $data]);
    }
}
