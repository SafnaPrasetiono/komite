<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\categories;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Data extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $label, $images;
    public $id_category;
    public $id_category_sub;

    protected $listeners = [
        'deleteAction' => 'delete',
        'deleteSubAction' => 'deleteSubCtg'
    ];

    protected $rules = [
        'label'     => 'required',
        // 'images'  => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096'
    ];

    protected $messages = [
        'label.required' => 'please input the category label!',
        // 'images.required' => 'Category must input images!',
        // 'images.image' => 'Oops sepertinya yang diupload bukan gambar!',
        // 'images.mimes' => 'Format gambar harus jpeg, png, jpg atau svg!',
        // 'images.max' => 'Ukuran gambar maksimal 4mb!',
    ];


    public function resetInput()
    {
        $this->label = null;
    }

    public function create()
    {
        $this->resetInput();
        $this->dispatchBrowserEvent('ctgModalShow');
    }
    public function store()
    {
        $this->validate();
        $slug = Str::slug($this->label);

        $ctg = new categories();
        $ctg->categories = $this->label;
        $ctg->slug = $slug;
        // $ctg->icons = $iconsName;
        // $ctg->region = $lang;
        if ($ctg->save()) {
            $this->dispatchBrowserEvent('success', 'Data telah berhasil disimpan!');
        } else {
            $this->dispatchBrowserEvent('error', 'Oops maaf database sedang sibuk!');
        }
        $this->resetInput();
        $this->dispatchBrowserEvent('ctgModalExpand');
    }
    public function edit($id)
    {
        $this->id_category = $id;
        $data = categories::find($id);
        $this->label = $data->categories;
        $this->images = '';
        $this->dispatchBrowserEvent('editModalShow');
    }
    public function update()
    {
        $this->validate();
        $slug = Str::slug($this->label);
        $ctg = categories::find($this->id_category);
        $ctg->categories = $this->label;
        $ctg->slug = $slug;
        if ($ctg->save()) {
            $this->dispatchBrowserEvent('success', 'Data telah berhasil terupdate!');
        } else {
            $this->dispatchBrowserEvent('error', 'Oops maaf database sedang sibuk!');
        }
        $this->resetInput();
        $this->dispatchBrowserEvent('editModalExpand');
    }


    public function prepareDelete($id)
    {
        $this->id_category = $id;
        $this->dispatchBrowserEvent('deleteConfrim');
    }
    public function delete()
    {
        $dataToDelete = categories::find($this->id_category);
        if ($dataToDelete->delete()) {
            $this->dispatchBrowserEvent('success', 'Data telah berhasil terhapus!');
        } else {
            $this->dispatchBrowserEvent('error', 'Oops maaf database sedang sibuk!');
        }
    }

    public function render()
    {
        $data = categories::paginate(12);
        return view('livewire.admin.categories.data', ['data' => $data]);
    }
}
