<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\categories_sub;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class DataSub extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $label;
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

    public function mount($post)
    {
        $this->id_category = $post;
    }

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

        $ctg = new categories_sub();
        $ctg->categories_subs = $this->label;
        $ctg->slug_subs = $slug;
        // $ctg->icons = $iconsName;
        $ctg->id_categories = $this->id_category;
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
        $this->id_category_sub = $id;
        $data = categories_sub::find($id);
        $this->label = $data->categories_subs;
        $this->dispatchBrowserEvent('editModalShow');
    }
    public function update()
    {
        $this->validate();
        $slug = Str::slug($this->label);
        $ctg = categories_sub::find($this->id_category_sub);
        $ctg->categories_subs = $this->label;
        $ctg->slug_subs = $slug;
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
        $this->id_category_sub = $id;
        $this->dispatchBrowserEvent('deleteConfrim');
    }
    public function delete()
    {
        $dataToDelete = categories_sub::find($this->id_category_sub);
        if ($dataToDelete->delete()) {
            $this->dispatchBrowserEvent('success', 'Data telah berhasil terhapus!');
        } else {
            $this->dispatchBrowserEvent('error', 'Oops maaf database sedang sibuk!');
        }
    }

    public function render()
    {
        $data = categories_sub::where('id_categories', $this->id_category)->paginate(12);
        return view('livewire.admin.categories.data-sub', ['data' => $data]);
    }
}
