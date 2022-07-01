<div>
    <div class="d-block rounded-3 bg-white shadow-sm mb-3 p-3">
        <div class="alert alert-primary" role="alert">
            <div class="d-flex align-items-center">
                <i class="fas fa-info-circle fa-fw"></i>
                <p class="mb-0 fw-bold ms-2">Info Validasi data</p>
            </div>
            <p class="mb-0">Data member yang mendaftar harus divalidasikan dengan syarat data yang terdaftar harus
                lengkap sebagai admin memastikan data member yang mendaftar harus benar-benar lengkap</p>
        </div>
        <div class="mb-3">
            @if ($members->validate == 0)
            <button wire:click='trems' type="button" class="btn btn-outline-primary w-100">Validasikan Data</button>
            @else
            <button wire:click='valid' type="button" class="btn btn-outline-success w-100">SUDAH VALIDASI</button>
            @endif
        </div>
    </div>

    <div class="modal fade" id="modals" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Validasi Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-primary m-0" role="alert">
                        <div class="d-flex align-items-center mb-3 fw-bold">
                            <i class="fas fa-exclamation-circle fa-lg fa-fw"></i>
                            <p class="mb-0 ms-3">Mohon diperhatikan persyaratannya</p>
                        </div>
                        <ul>
                            <li>Pastikan data member yang daftar sudah lengkap</li>
                            <li>Tidak ada data pendaftaran menggunakan data yang sama</li>
                            <li>Pastikan nomor telepon dan email aktif</li>
                            <li>Pastikan admin telah menghubungi member melalui telepon ataupun email</li>
                        </ul>
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button wire:click='store' class="btn btn-primary">Validasikan Data</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalValid" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Validasi Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center py-4">
                        <i class="fas fa-check-circle fa-4x fa-fw mb-3 text-success"></i>
                        <p class="mb-0 fs-3 fw-bold">VALID</p>
                        <p class="mb-0 fs-5">Data ini sudah diterima kebenarannya</p>
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
        document.addEventListener('showModals', function(event) {
            $('#modals').modal('show');
        })
        document.addEventListener('validModals', function(event) {
            $('#modalValid').modal('show');
        })
        document.addEventListener('expandModals', function(event) {
            $('#modals').modal('hide');
        })
        document.addEventListener('success', function(event) {
            Swal.fire({
                icon: 'success',
			    title: 'Good Jobs!',
                text: event.detail,
            })
        })
        document.addEventListener('error', function(event) {
            Swal.fire({
                icon: 'error',
                title: 'Opps...!',
                text: event.detail,
            })
        })
    </script>
</div>