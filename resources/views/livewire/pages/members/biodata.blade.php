<div>
    <div class="d-block rounded border mb-3">
        <div class="py-2 px-3 border-bottom">
            <p class="mb-0 fw-bold">Biodata Lengkap</p>
        </div>
        <div class="p-3">
            <div class="row g-4">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                    <label for="photos" class="form-label">Upload photos</label>
                    <div class="ratio ratio-3x4 mb-3 w-100">
                        <label for="photos" class="foto-upload mb-2">
                            @if ($photos)
                            <img src="{{ $photos->temporaryUrl() }}" class="img-fluid">
                            @else
                            <div class="text-center" wire:loading.remove wire:target='photos'>
                                <p class="fw-bold fs-5 text-secondary mb-0">3 x 4</p>
                                <p class="mb-0 fw-light" wire:loading.remove wire:target='photos'>Upload Disini</p>
                            </div>
                            @endif
                            <div class="loading-stage" wire:loading.flex wire:target='photos'>
                                <div class="spinner-border" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>
                            </div>
                        </label>
                    </div>
                    <input wire:model='photos' type="file" name="photos" id="photos"
                        class="form-control d-none  @error('photos') is-invalid @enderror">
                    @error('photos')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12 col-sm-6 col-md-7 col-lg-9 col-xl-10">
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="username" class="form-label">Username</label>
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
                                <option value="Laki-laki">Laki-laki</option>
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
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">+62</span>
                                <input wire:model='phone' type="number" name="phone"
                                    class="form-control @error('phone') is-invalid @enderror" id="phone"
                                    aria-describedby="basic-addon1">
                            </div>
                            @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>