@extends('admin.layouts.panel')

@section('head')
<title>Kopitu Denpasar - Detail member kopitu denpasar</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded-3 bg-white shadow-sm mb-3">
        <div class="d-flex p-3 border-bottom">
            <p class="mb-0 fw-bold">Biodata Lengkap</p>
            @if ($data->validate == 1)
            <span class="ms-auto badge text-bg-success lh-0">VALID</span>
            @endif
        </div>
        <div class="p-3">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input readonly type="text" name="username" id="username" class="form-control"
                    value="{{ $data->username }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input readonly id="email" class="form-control " value="{{ $data->email }}">
            </div>
            <div class="row g-3">
                <div class="col-12">
                    <label for="phone" class="form-label">Nomor Telepon</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">+62</span>
                        <input readonly type="number" name="phone" class="form-control " id="phone"
                            value="{{ $data->phone }}">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <label for="born" class="form-label">Tanggal Lahir</label>
                    <input readonly type="date" name="born" id="born" class="form-control" value="{{ $data->born }}">
                </div>
                <div class="col-12 col-md-6">
                    <label for="gender" class="form-label">Jenis Kelamin</label>
                    <input readonly type="text" class="form-control" id="gender" value="{{ $data->gender }}">
                </div>
            </div>
        </div>
    </div>

    <div class="d-block rounded-3 bg-white shadow-sm mb-3">
        <div class="p-3 border-bottom">
            <p class="mb-0 fw-bold">Alamat Lengkap</p>
        </div>
        <div class="p-3">
            <div class="row g-2">
                <div class="col-12 col-md-6">
                    <label for="province" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" value="{{ $data->province }}" readonly>
                </div>
                <div class="col-12 col-md-6">
                    <label for="city" class="form-label">Kota/kabupaten</label>
                    <input type="text" class="form-control" value="{{ $data->city }}" readonly>
                </div>
                <div class="col-12 col-md-6">
                    <label for="kecamatan" class="form-label">kecamatan</label>
                    <input type="text" class="form-control" value="{{ $data->district }}" readonly>
                </div>
                <div class="col-12 col-md-6">
                    <label for="kelurahan" class="form-label">kelurahan</label>
                    <input type="text" class="form-control" value="{{ $data->village }}" readonly>
                </div>
                <div class="col-12 col-md-6">
                    <label for="postal_code" class="form-label">Kode Pos</label>
                    <input type="text" name="postal_code" class="form-control" id="postal_code"
                        value="{{ $data->postal_code }}" readonly>
                </div>
                <div class="col-12 col-md-6">
                    <label for="country" class="form-label">Warga Negara</label>
                    <input type="text" name="country" class="form-control" id="country" value="{{ $data->country }}"
                        readonly>
                </div>
                <div class="col-12">
                    <label for="address" class="form-label">Alamat Lengkap</label>
                    <textarea name="address" id="address" rows="4" class="form-control"
                        readonly>{{ $data->address }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="d-block rounded-3 bg-white shadow-sm mb-3">
        <div class="py-2 px-3 border-bottom">
            <p class="mb-0 fw-bold">Dekripsi Usaha</p>
        </div>
        <div class="p-3">
            <div class="mb-3">
                <label for="jenis-usaha" class="form-label">Jenis Usaha</label>
                <input name="typeBusiness" type="text" class="form-control" value="{{ $data->typeBusiness }}" disabled>
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Kelas Usaha</label>
                <input name="typeBusiness" type="text" class="form-control" value="{{ $data->class }}" disabled>
            </div>
            {{-- <div class="mb-3">
                <select name="class" class="form-select mb-3" aria-label=".form-select-lg example">
                    <option value="" selected>Pilih Kelas Usaha</option>
                    <option value="MIKRO">MIKRO - (50JT-300JT)</option>
                    <option value="KECIL">KECIL - (300JT-500JT)</option>
                    <option value="MENENGAH">MENENGAH - (2.5M-50M)</option>
                    <option value="BESAR">BESAR - (> 50M)</option>
                </select>
            </div> --}}
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi Usaha</label>
                <textarea name="description" id="description" rows="6" class="form-control"
                    readonly>{{ $data->description }}</textarea>
            </div>
        </div>
    </div>

    <div class="d-block rounded-3 bg-white shadow-sm mb-3">
        <div class="p-3 border-bottom">
            <p class="mb-0 fw-bold">Izin Usaha</p>
        </div>
        <div class="p-3">
            <div class="row g-3">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="checkUD" @if ($ps->ud == 1) checked="true"
                        @endif disabled>
                        <label class="form-check-label" for="checkUD">
                            Usaha Dagang
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="form-check">
                        <input @if ($ps->siup == 1) checked="true" @endif disabled class="form-check-input"
                        type="checkbox" value="1" id="siup">
                        <label class="form-check-label" for="siup">
                            Surat Izin Usaha Perdagangan
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="form-check">
                        <input @if ($ps->halal == 1) checked="true" @endif disabled class="form-check-input"
                        type="checkbox" value="1" id="halal">
                        <label class="form-check-label" for="halal">
                            Sertifikat Halal
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="form-check">
                        <input @if ($ps->bpom == 1) checked="true" @endif disabled class="form-check-input"
                        type="checkbox" value="1" id="bpom">
                        <label class="form-check-label" for="bpom">
                            Sertifikat BPOM
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="form-check">
                        <input @if ($ps->pirt == 1) checked="true" @endif disabled class="form-check-input"
                        type="checkbox" value="1" id="pirt">
                        <label class="form-check-label" for="pirt">
                            Sertifikat PIRT
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="form-check">
                        <input @if ($ps->nib == 1) checked="true" @endif disabled class="form-check-input"
                        type="checkbox" value="1" id="NIB">
                        <label class="form-check-label" for="NIB">
                            Sertifikat NIB
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="form-check">
                        <input @if ($ps->sku == 1) checked="true" @endif disabled class="form-check-input"
                        type="checkbox" value="1" id="SKU">
                        <label class="form-check-label" for="SKU">
                            Sertifikat SKU
                        </label>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="form-check">
                        <input @if ($ps->izin == 1) checked="true" @endif disabled class="form-check-input"
                        type="checkbox" value="1" id="izin">
                        <label class="form-check-label" for="izin">
                            Tidak Memiliki Izin
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewire('admin.members.validate', ['post' => $data->id_members])

</div>
@endsection

@section('script')

@endsection