<div>
    @if ($data->count() != 0)
    <div class="row g-3 align-items-center">
        @foreach ($data as $item)
        <div class="col-6 col-md-4 col-lg-3">
            <div class="position-relative rounded overflow-hidden">
                <div class="ratio ratio-4x3">
                    <div class="img-galleries" style="background-image: url('/images/galleries/{{ $item->location }}');"></div>
                </div>
                <button wire:click='remove({{ $item->id_galleries }})'
                    class="btn position-absolute btn top-0 end-0 m-2 text-white" type="button">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <div class="d-block text-center alert-info py-5">
        <div class="py-5">
            <i class="fas fa-image fa-4x fa-fw mb-3"></i>
            <p class="fw-bold mb-0 fs-5">Tidak ada galeri</p>
            <p class="mb-0">Tambahkan galeri untuk untuk melengkapi data</p>
        </div>
    </div>
    @endif

    <script>
        document.addEventListener('deleteConfrimed', function() {
            Swal.fire({
                    title: "Delete?",
                    text: "Kamu yakin ingin menghapus data galeri?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete!',
                    cancelButtonText: 'Tidak',
                })
                .then((next) => {
                    if (next.isConfirmed) {
                        Livewire.emit('deleteAction');
                    }
                });
        })
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
    </script>
</div>