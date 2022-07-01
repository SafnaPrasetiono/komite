<div>
    <div class="position-relative d-block rounded-3 shadow-sm bg-white p-3">
        <div class="d-flex mb-3">
            <div class="ms-auto">
                <input type="text" class="form-control" placeholder="Cari Transaksi...">
            </div>
        </div>
        <div class="d-block table-responsive">
            <table class="table table-borderless">
                <thead class="border">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">username</th>
                        <th scope="col">email</th>
                        <th scope="col">Telepon</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $item)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>
                            {{ $item->username }}
                        </td>
                        <td>{{ $item->email }}</td>
                        <td>
                            62{{ $item->phone }}
                        </td>
                        <td>
                            @if ($item->validate == 1)
                            <span class="badge text-bg-success">Valid</span>
                            @else
                            <span class="badge text-bg-secondary">InValid</span>
                            @endif
                        </td>
                        <td>
                            <div class="text-nowrap">
                                    {{ date("d F Y", strtotime($item->created_at)) }}
                            </div>
                        </td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('admin.member.detail', ['id' => $item->id_members]) }}" class="btn btn-outline-primary btn-sm me-1">
                                    <i class="fas fa-eye fa-sm fa-fw"></i>
                                </a>
                                <button wire:click='remove({{ $item->id_members }})' type="button" class="btn btn-outline-danger btn-sm">
                                    <i class="fas fa-trash fa-sm fa-fw"></i>
                                </button>
                            </div>
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
                {{ $data->links('livewire.layouts.paginations') }}
            </nav>
            @endif
        </div>
    </div>


    <script>
        document.addEventListener('deleteConfrimed', function() {
            Swal.fire({
                    title: "Hapus?",
                    text: "Kamu yakin menghapus data member ini?",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonText: 'Iya, hapus!',
                    cancelButtonText: 'Tidak',
                })
                .then((next) => {
                    if (next.isConfirmed) {
                        Livewire.emit('deleteAction');
                    } else {
                        Swal.fire("Data member tetap aman!");
                    }
                });
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