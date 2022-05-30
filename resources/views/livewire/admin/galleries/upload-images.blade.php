<div>
    <div class="d-flex align-items-center py-3 px-4 border-bottom">
        <p class="mb-0 fw-bold">Tambah Images</p>
        <label for="item-images" class="btn btn-primary px-2 py-1 ms-auto">
            <i class="fas fa-plus fa-sm fa-fw"></i>
        </label>
        <input wire:model='images' type="file" id="item-images" class="d-none" multiple onchange="uploadImages()">
    </div>
    <div class="p-3">
        @if ($data->count() != 0)
        <div class="row align-items-center">
            @foreach ($data as $item)
            <div class="col-6 col-md-4 col-lg-3 p-2">
                <div class="d-block position-relative">
                    <img src="{{ url('/images/galleries/'. $item->location) }}" alt="product" class="img-fluid">
                    <button wire:click='remove({{ $item->id_galleries }})' class="btn position-absolute top-0 end-0 me-1 text-white"
                        type="button">
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
    </div>
    <div class="d-flex p-3">
        <a href="#" class="btn btn-primary">
            Selanjutnya <i class="fas fa-arrow-right fa-sm fa-fw"></i>
        </a>
    </div>

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
                    } else {
                        Swal.fire("Data gallery kamu tetap aman!");
                    }
                });
        })

        function uploadImages(){
            Livewire.emit('saveImages');
        }
    </script>
        @if(session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Good Jobs!',
                text: '{{ session()->get("success") }}',
                showConfirmButton: false,
                timer: 2500
            })
            location.reload();
        </script>
        @elseif(session()->has('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Opps...!',
                text: '{{ session()->get("error") }}',
                showConfirmButton: false,
                timer: 2500
            })
        </script>
        @endif
</div>