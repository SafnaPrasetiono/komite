<div>
    <div class="bg-custom-3 py-5">
        <div class="container">
            <div class="d-block rounded-3 shadow-sm bg-custom-4 py-5 text-center">
                <h3 class="text-blue-1">PRIKSA DATA ANDA</h3>
                <p class="fs-5 text-blue-2">Sudah daftar keanggotaan cek datamu dibawah sini</p>
                <div class="mx-auto w-75 w-lg-50 mb-3">
                    <input wire:model='code' name="code" type="text"
                        class="form-control form-control-lg text-center @error('code') is-invalid @enderror"
                        placeholder="KODE PENDAFTARAN">
                    @error('code')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button wire:click='store' class="btn btn-outline-primary btn-lg px-5">CEK DATA</button>
            </div>
        </div>
    </div>

    @if($data)
    <div class="modal fade" id="modals" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Status Pendaftaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telepon</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $data->username }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>62{{ $data->phone }}</td>
                                    <td>{{ $data->class }}</td>
                                    <td>
                                        @if ($data->validate == 1)
                                        <span class="badge text-bg-primary">Sudah Valid</span>
                                        @else
                                        <span class="badge text-bg-secondary">Belum divalidasi</span>
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="modal fade" id="modalErros" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Status Pendaftaran</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center py-4">
                        <i class="fas fa-exclamation-triangle fa-5x fa-fw mb-3"></i>
                        <p class="mb-0 fs-3 fw-bold">Oops!</p>
                        <p class="mb-0 fs-5">Kode pendaftaran anda tidak dapat ditemukan</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ url('/assets/dist/js/jquery.js') }}"></script>
    <script>
        document.addEventListener('showModal', function(event) {
            $('#modals').modal('show');
        })
        document.addEventListener('showModalError', function(event) {
            $('#modalErros').modal('show');
        })
    </script>
</div>