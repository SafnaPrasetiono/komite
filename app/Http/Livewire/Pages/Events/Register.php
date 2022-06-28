<?php

namespace App\Http\Livewire\Pages\Events;

use App\Models\District;
use App\Models\events_register;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Village;
use Livewire\Component;

class Register extends Component
{
    public $events_id;
    public $username, $email, $born, $phone, $gender;
    public $province_id, $city_id, $district_id, $villages_id, $country, $postal_code, $address;

    public $getcity = [];
    public $distric = [];
    public $villages = [];

    protected $rules = [
        'username'      => 'required',
        'email'         => 'required',
        'born'          => 'required',
        'gender'        => 'required',
        'phone'         => 'required',

        'province_id'   => 'required',
        'city_id'       => 'required',
        'district_id'   => 'required',
        'villages_id'    => 'required',
        'postal_code'   => 'required',
        'country'       => 'required',
        'address'       => 'required',
    ];

    protected $messages = [
        'username.required' => 'Oops, nama lengkap anda masih kosong!',
        'email.required' => 'Oops, email harus terisi!',
        'born.required' => 'Oops, tanggal lahir harus terisi!',
        'gender.required' => 'Oops, gender harus dipilih!',
        'phone.required' => 'Oops, nomor telepon harus terisi!',
        'province_id.required' => 'Oops, provinsi harus dipilih!',
        'city_id.required' => 'Oops, kota harus dipilih!',
        'district_id.required' => 'Oops, kecamatan harus dipilih!',
        'villages_id.required' => 'Oops, kelurahan harus dipilih!',
        'postal_code.required' => 'Oops, kode pos harus terisi!',
        'country.required' => 'Oops, warga negara harus terisi!',
        'address.required' => 'Oops, alamat lengkap tidak boleh kosong!',
    ];

    public function show()
    {
        $this->username = '';
        $this->email = '';
        $this->born = '';
        $this->phone = '';
        $this->gender = '';
        $this->province_id = '';
        $this->city_id = '';
        $this->district_id = '';
        $this->villages_id = '';
        $this->dispatchBrowserEvent('showModals');
    }

    public function mount($post)
    {
        $this->events_id = $post;
    }

    public function store()
    {

        $this->validate();

        $provinces = Province::find($this->province_id);
        $cities = Regency::find($this->city_id);
        $districts = District::find($this->district_id);
        $villages = Village::find($this->villages_id);

        $data = new events_register();
        $data->username = $this->username;
        $data->email = $this->email;
        $data->born = $this->born;
        $data->gender = $this->gender;
        $data->phone = $this->phone;
        $data->country = $this->country;
        $data->province = $provinces->name;
        $data->city = $cities->name;
        $data->district = $districts->name;
        $data->village = $villages->name;
        $data->postal_code = $this->postal_code;
        $data->address = $this->address;
        $data->province_id = $provinces->id;
        $data->regency_id = $cities->id;
        $data->district_id = $districts->id;
        $data->village_id = $villages->id;
        $data->events_id = $this->events_id;

        if($data->save()){
            $this->dispatchBrowserEvent('success', 'Pendaftaran anda telah berhasil disimpan!');
        }else{
            $this->dispatchBrowserEvent('error', 'Oops, tejadi kesalahan database ulangi nanti!');
        }
        $this->dispatchBrowserEvent('expandModals');
    }

    public function render()
    {
        $province = Province::all();
        if ($this->province_id) {
            $this->getcity = Regency::where('province_id', $this->province_id)->get();
        }
        if ($this->city_id) {
            $this->districts = District::where('regency_id', $this->city_id)->get();
        }
        if ($this->district_id) {
            $this->villages = Village::where('district_id', $this->district_id)->get();
        }
        return view('livewire.pages.events.register', ['province' => $province]);
    }
}
