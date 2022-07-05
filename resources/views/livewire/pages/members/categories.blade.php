<div>
    <div class="d-block rounded border mb-3">
        <div class="p-3 border-bottom">
            <p class="mb-0 fw-bold">Usaha Keanggotaan</p>
        </div>
        <div class="p-3">
            <div class="mb-3">
                <label for="jenis-usaha" class="form-label">Jenis Usaha</label>
                <input name="typeBusiness" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Kelas Usaha</label>
                <select name="class" class="form-select mb-3" aria-label=".form-select-lg example">
                    <option value="" selected>Pilih Kelas Usaha</option>
                    <option value="MIKRO">MIKRO - (50JT-300JT)</option>
                    <option value="KECIL">KECIL - (300JT-500JT)</option>
                    <option value="MENENGAH">MENENGAH - (2.5M-50M)</option>
                    <option value="BESAR">BESAR - (> 50M)</option>
                  </select>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Dekripsi Usaha</label>
                <textarea name="description" id="description" rows="4"
                    class="form-control @error('description') is-invalid @enderror"></textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="permission" class="form-label">Ijin Usaha yang Dimiliki</label>
                <div class="row g-3">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="form-check">
                            <input name="ud" wire:model='ud' class="form-check-input" type="checkbox" value="1" id="checkUD">
                            <label class="form-check-label" for="checkUD">
                              Usaha Dagang
                            </label>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="form-check">
                            <input name="siup" wire:model='siup' class="form-check-input" type="checkbox" value="1" id="siup">
                            <label class="form-check-label" for="siup">
                                Surat Izin Usaha Perdagangan
                            </label>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="form-check">
                            <input name="halal" wire:model='halal' class="form-check-input" type="checkbox" value="1" id="halal">
                            <label class="form-check-label" for="halal">
                                Sertifikat Halal
                            </label>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="form-check">
                            <input name="bpom" wire:model='bpom' class="form-check-input" type="checkbox" value="1" id="bpom">
                            <label class="form-check-label" for="bpom">
                                Sertifikat BPOM
                            </label>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="form-check">
                            <input name="pirt" wire:model='pirt' class="form-check-input" type="checkbox" value="1" id="pirt">
                            <label class="form-check-label" for="pirt">
                                Sertifikat PIRT
                            </label>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="form-check">
                            <input name="nib" wire:model='nib' class="form-check-input" type="checkbox" value="1" id="NIB">
                            <label class="form-check-label" for="NIB">
                                Sertifikat NIB
                            </label>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="form-check">
                            <input name="sku" wire:model='sku' class="form-check-input" type="checkbox" value="1" id="SKU">
                            <label class="form-check-label" for="SKU">
                                Sertifikat SKU
                            </label>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="form-check">
                            <input name="izin" wire:model='izin' class="form-check-input" type="checkbox" value="1" id="izin">
                            <label class="form-check-label" for="izin">
                                Tidak Memiliki Izin
                            </label>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
