<?php

namespace App\Http\Livewire\Pages\Members;

use Livewire\Component;
use Livewire\WithFileUploads;

class Biodata extends Component
{
    use WithFileUploads;
    public $username, $email, $born, $phone, $gender, $photos;

    protected $rules = [
        'username'     => 'required',
        'email'     => 'required',
        'born'     => 'required',
        'phone'     => 'required',
        'gender'     => 'required',
    ];

    protected $messages = [
        'username.required' => 'Username anda harus diinputkan!',
        'email.required' => 'Email anda harus diinputkan!',
        'born.required' => 'Tanggal lahir anda harus diinputkan!',
        'phone.required' => 'Nomor telepon anda harus diinputkan!',
        'gender.required' => 'Jenis kelamin anda harus dipilih!',
    ];

    public function updated()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.pages.members.biodata');
    }
}
