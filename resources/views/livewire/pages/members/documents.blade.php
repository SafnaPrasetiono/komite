<div>
    <div class="d-block rounded border mb-3">
        <div class="py-2 px-3 border-bottom">
            <p class="mb-0 fw-bold">Upload Document</p>
        </div>
        <div class="p-3">
            <div class="mb-3">
                <label for="nik" class="form-label">Nomor NIK</label>
                <input type="text" name="nik" class="form-control @error('ktp') is-invalid @enderror" id="nik"
                    placeholder="">
                @error('nik')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="ktp" class="form-label">Upload KTP</label>
                <label for="ktp" class="foto-upload mb-2">
                    @if ($ktp)
                    <img src="{{ $ktp->temporaryUrl() }}" class="img-fluid">
                    @else
                    <i class="fas fa-plus fa-3x fa-fw text-secondary" wire:loading.remove wire:target='ktp'></i>
                    @endif
                    <div class="loading-stage" wire:loading.flex wire:target='ktp'>
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </label>
                <input wire:model='ktp' type="file" name="ktp" id="ktp"
                    class="form-control  @error('ktp') is-invalid @enderror">
                @error('ktp')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
</div>