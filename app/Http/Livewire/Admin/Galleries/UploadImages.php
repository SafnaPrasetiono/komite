<?php

namespace App\Http\Livewire\Admin\Galleries;

use App\Models\galleries;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadImages extends Component
{
    use WithFileUploads;

    public $id_galleries_contents;
    public $id_galleries;
    public $images = [];
    protected $listeners = [
        "saveImages" => "save",
        "deleteAction" => "delete"
    ];

    protected $rules = [
        'images.*'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096'
    ];

    protected $messages = [
        'images.*.required' => 'Category must input images!',
        'images.*.image' => 'Oops sepertinya yang diupload bukan gambar!',
        'images.*.mimes' => 'Format gambar harus jpeg, png, jpg atau svg!',
        'images.*.max' => 'Ukuran gambar maksimal 4mb!',
    ];

    public function mount($id)
    {
        $this->id_galleries_contents = $id;
    }

    public function save()
    {
        $this->validate();
        // dd(123);
        // try {
        foreach ($this->images as $photo) {
            $resorces = $photo;
            $originFullName = $resorces->getClientOriginalName();
            $originName = pathinfo($originFullName, PATHINFO_FILENAME);;
            $extension = $resorces->getClientOriginalExtension();
            $size = $resorces->getSize();
            $newImagesNames = "BNR-" . substr(md5($originName . date("YmdHis")), 0, 28) . '.' . $extension;

            galleries::create([
                'name_galleries' => $originName,
                'size' => $size,
                'extension' => $extension,
                'location' => $newImagesNames,
                'id_galleries_contents' => $this->id_galleries_contents,
            ]);
            $resorces->storeAs('/images/galleries/',  $newImagesNames, 'myLocal');
        }
        $this->images = [];
        session()->flash('success', 'Data telah disimpan!');
    }

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

    public function render()
    {
        $data = galleries::where('id_galleries_contents', $this->id_galleries_contents)->orderBy('created_at', 'desc')->get();
        return view('livewire.admin.galleries.upload-images', ['data' => $data]);
    }
}
