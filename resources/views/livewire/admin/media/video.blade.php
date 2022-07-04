<div>
    <div class="d-flex align-items-center py-3">
        <button wire:click='show' class="btn btn-theme px-3">Tambah</button>
        <div class="ms-auto">
            <select wire:model='pages' class="form-select" aria-label="Default select example">
                <option value="12">12</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
                <option value="99999">all</option>
            </select>
        </div>
    </div>
    @if($data->count() != 0)
    <div class="table-responsive mb-3">
        <table class="table table-borderless">
            <thead class="alert-secondary">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Link</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $index => $item)
                <tr>
                    <th>{{ $index + 1 }}</th>
                    <td>{{ $item->title }}</td>
                    <td>
                        <a href="{{ $item->links }}" target="_blank" rel="noopener noreferrer">
                            {{ $item->links }}
                        </a>
                    </td>
                    <td>{{ date('d F Y', strtotime($item->created_at)) }}</td>
                    <td>

                        <button wire:click='removed({{ $item->id_videos }})' class="btn btn-danger btn-sm">
                            <i class="fas fa-trash fa-sm fa-fw"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="d-flex align-items-center">
        <p class="mb-0 border py-1 px-2 rounded">
            <span class="fw-bold">{{ $data->count() }}</span>
        </p>
        @if ($data->hasPages())
        <nav class="ms-auto">
            {{ $data->links('admin.layouts.paginations') }}
        </nav>
        @endif
    </div>
    @else
    <div class="alert alert-info p-5 text-center">
        <i class="fas fa-video fa-4x fa-fw mb-3"></i>
        <p class="fs-3 fw-bold mb-0">OOPS!</p>
        <p class="fw-bold">Data Video Masih Kosong!</p>
    </div>
    @endif


    <div wire:ignore.self class="modal fade" id="thisModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <img src="{{ url('/images/elements/video.png') }}" alt="video" class="w-75">
                    </div>
                    <div class="mb-3 placeholder-glow">
                        <label for="title" class="form-label">Title</label>
                        <input wire:model="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror"
                            id="title" wire:loading.class='placeholder' wire:target='store'>
                        @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 placeholder-glow">
                        <label for="links" class="form-label">Link Video</label>
                        <input wire:model="links" name="links" type="text" class="form-control @error('links') is-invalid @enderror"
                            id="links" wire:loading.class='placeholder' wire:target='store'>
                        @error('links')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button wire:click='store' type="button" class="btn btn-primary" wire:loading.attr='disabled'
                        wire:target='store'>
                        <span wire:loading.block wire:target='store'>
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                            Loading...
                        </span>
                        <span wire:loading.remove wire:target='store'>Save changes</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', () => {

            document.addEventListener('deleteConfrimed', () => {
                Swal.fire({
                        title: "Apa anda yakin?",
                        text: "Menghapus data galleri ini!!!",
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

            window.addEventListener('showModals', () => {
                $('#thisModal').modal('show');
            });
            window.addEventListener('hideModals', () => {
                $('#thisModal').modal('hide');
            });

            window.addEventListener('success', (event) => {
                Swal.fire({
                    icon: 'success',
                    title: 'Good Jobs!',
                    text: event.detail,
                })
            })
            window.addEventListener('erros', (event) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Opps...!',
                    text: event.detail,
                })
            })
        });
    </script>
</div>