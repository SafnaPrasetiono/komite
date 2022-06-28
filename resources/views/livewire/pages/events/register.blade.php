<div>
    <div class="d-block h-100 px-3 py-5 text-center border border-white rounded">
        <p class="fs-5 fw-bold text-uppercase mb-0">Daftarakan diri anda sekarang</p>
        <p>Anda bisa mendaftarkan diri anda dengan mengklik tombol diabawah ini</p>
        <button wire:click='show' class="btn btn-outline-danger px-5">DAFTAR</button>
    </div>


    <div wire:ignore.self class="modal fade" id="Modals" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-block">
                        <div class="py-2 px-3 border-bottom">
                            <p class="mb-0 fw-bold">Biodata Lengkap</p>
                        </div>
                        <div class="p-3">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="username" class="form-label">Nama Lengkap</label>
                                    <input wire:model='username' type="text" name="username" id="username"
                                        class="form-control @error('username') is-invalid @enderror">
                                    @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input wire:model='email' id="email"
                                        class="form-control @error('email') is-invalid @enderror">
                                    <input type="text" name="email" value="{{ $email }}" class="d-none">
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="born" class="form-label">Tanggal Lahir</label>
                                    <input wire:model='born' type="date" name="born" id="born"
                                        class="form-control @error('born') is-invalid @enderror">
                                    @error('born')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="gender" class="form-label">Jenis Kelamin</label>
                                    <select wire:model='gender' name="gender" id="gender"
                                        class="form-select @error('gender') is-invalid @enderror">
                                        <option value="">Pilih jenis Kelamin</option>
                                        <option value="pria">Laki-laki</option>
                                        <option value="wanita">wanita</option>
                                    </select>
                                    @error('gender')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="phone" class="form-label">Nomor Telepon</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">+62</span>
                                        <input wire:model='phone' type="number" name="phone"
                                            class="form-control @error('phone') is-invalid @enderror" id="phone"
                                            aria-describedby="basic-addon1">
                                    </div>
                                    @error('phone')
                                    <div class="d-block invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-block">
                        <div class="p-3 border-bottom">
                            <p class="mb-0 fw-bold">Alamat Lengkap</p>
                        </div>
                        <div class="p-3">
                            <div class="row g-2">
                                <div class="col-12 col-md-6">
                                    <label for="province" class="form-label">Provinsi</label>
                                    {{-- <input type="text" name="province" id="province"
                                        class="form-control @error('province') is-invalid @enderror"> --}}
                                    <select wire:model='province_id' name="province_id" id="province"
                                        class="form-select @error('province_id') is-invalid @enderror">
                                        <option value="">Pilih provinsi</option>
                                        @foreach ($province as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('province_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="city" class="form-label">Kota/kabupaten</label>
                                    {{-- <input type="text" name="city" id="city"
                                        class="form-control @error('city') is-invalid @enderror"> --}}
                                    <select wire:model='city_id' name="city_id" id="city" class="form-select @error('city_id') is-invalid @enderror"
                                        @if(!$province_id) disabled @endif>
                                        <option value="">Pilih Kota</option>
                                        @if($province_id)
                                        @foreach ($getcity as $items)
                                        <option value="{{$items->id}}">{{ $items->name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    @error('city_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="kecamatan" class="form-label">kecamatan</label>
                                    {{-- <input type="text" name="kecamatan" id="kecamatan"
                                        class="form-control @error('kecamatan') is-invalid @enderror"> --}}
                                    <select wire:model='district_id' name="district_id" id="kecamatan"
                                        class="form-select @error('district_id') is-invalid @enderror" @if(!$city_id) disabled @endif>
                                        <option value="">Pilih kecamatan</option>
                                        @if($city_id)
                                        @foreach ($districts as $itemd)
                                        <option value="{{$itemd->id}}">{{ $itemd->name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    @error('district_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="kelurahan" class="form-label">kelurahan</label>
                                    {{-- <input type="text" name="district" id="district"
                                        class="form-control @error('district') is-invalid @enderror"> --}}
                                    <select wire:model='villages_id' name="village_id" id="kelurahan"
                                        class="form-select @error('villages_id') is-invalid @enderror" @if(!$district_id) disabled @endif>
                                        <option value="">Pilih kelurahan</option>
                                        @if($district_id)
                                        @foreach ($villages as $itemv)
                                        <option value="{{$itemv->id}}">{{ $itemv->name }}</option>
                                        @endforeach
                                        @endif
                                    </select>
                                    @error('villages_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="postal_code" class="form-label">Kode Pos</label>
                                    <input wire:model='postal_code' type="text" name="postal_code"
                                        class="form-control @error('postal_code') is-invalid @enderror"
                                        id="postal_code">
                                    @error('postal_code')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="country" class="form-label">Warga Negara</label>
                                    <input wire:model='country' type="text" name="country"
                                        class="form-control @error('country') is-invalid @enderror" id="country">
                                    @error('country')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="address" class="form-label">Alamat Lengkap</label>
                                    <textarea wire:model='address' name="address" id="address" rows="4"
                                        class="form-control @error('address') is-invalid @enderror"></textarea>
                                    @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button wire:click='store' type="button" class="btn btn-primary" wire:loading.attr="disabled"
                        wire:target='store'>
                        <span wire:loading.block wire:target='store'>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            <span>Loading...</span>
                        </span>
                        <span wire:loading.remove wire:target='store'>Daftarkan</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
            window.addEventListener('showModals', () => {
                $('#Modals').modal('show');
            });
            window.addEventListener('expandModals', () => {
                $('#Modals').modal('hide');
            });

            window.addEventListener('success', event => {
                Swal.fire({
                    icon: 'success',
                    title: 'Good Jobs!',
                    text: event.detail,
                })
            })
            window.addEventListener('erros', event => {
                Swal.fire({
                    icon: 'error',
                    title: 'Opps...!',
                    text: event.detail,
                })
            })
        });
    </script>
</div>