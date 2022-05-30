<?php

namespace App\Http\Livewire\Admin\Banners;

use App\Models\banners;
use Livewire\Component;
use Livewire\WithFileUploads;

class Data extends Component
{
    use WithFileUploads;

    public $id_banners;
    public $banners;
    public $pages;

    protected $listeners = ['deleteAction' => 'delete' ];

    protected $rules = [
        'banners'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
    ];

    protected $messages = [
        'banners.required' => 'Oops, pleas input banner phone!',
        'banners.image' => 'Oops sepertinya yang diupload bukan gambar!',
        'banners.mimes' => 'Format gambar harus jpeg, png, jpg atau svg!',
        'banners.max' => 'Ukuran gambar maksimal 4mb!',
    ];

    public function show()
    {
        $this->banners = '';
        $this->dispatchBrowserEvent('bannerModalShow');
    }

    public function store()
    {
        $this->validate();

        $resorces = $this->banners;
        $originFullName = $resorces->getClientOriginalName();
        $originName = pathinfo($originFullName, PATHINFO_FILENAME);;
        $extension = $resorces->getClientOriginalExtension();
        $size = $resorces->getSize();
        $NEWBANNERS = "BNR-" . substr(md5($originName . date("YmdHis")), 0, 28) . '.' . $extension;

        $data = new banners();
        $data->banners_name = $originName;
        $data->size = $size;
        $data->extension = $extension;
        $data->location = $NEWBANNERS;
        if ($data->save()) {
            $resorces->storeAs('/images/banners/',  $NEWBANNERS, 'myLocal');
            session()->flash('success', 'Data banner telah ditambahkan');
        } else {
            session()->flash('error', 'Oops, Something worng with databse, try again letter!');
        }
        $this->dispatchBrowserEvent('bannerModalExpand');
    }

    public function removed($id)
    {
        $this->id_banners = $id;

        $this->dispatchBrowserEvent('deleteConfrimed');
    }

    public function delete(){
        $data = banners::find($this->id_banners);
        if($data){
            $data->delete();
            session()->flash('success', 'Data banner telah dihapus');
        } else {
            session()->flash('error', 'Oops, Maaf databse sedang sibuk, ulangin nanti!');
        }
    }

    public function render()
    {
        $data =  banners::orderBy('created_at', 'desc')->paginate($this->pages);
        return view('livewire.admin.banners.data', ['data' => $data]);
    }
}
