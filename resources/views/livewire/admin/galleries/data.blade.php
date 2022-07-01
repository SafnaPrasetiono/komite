<div>
	<div class="d-flex align-items-center py-3">
		<a class="btn btn-theme px-3" href="{{ route('admin.gallery.create') }}">Tambah</a>
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
	<div class="table-responsive mb-3">
		<table class="table table-borderless">
			<thead class="alert-secondary">
				<tr>
					<th>No</th>
					<th>Title</th>
					<th>Status</th>
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
						@if($item->publish == true)
						<span class="badge rounded-pill bg-success px-3">Active</span>
						@else
						<span class="badge rounded-pill bg-secondary px-3">Pasive</span>
						@endif
					</td>
					<td>{{ date('d', strtotime($item->date_start)) }} - {{ date('d F Y', strtotime($item->date_end)) }}
					</td>
					<td>
						<a href="{{ route('admin.gallery.update', ['id' => $item->id_galleries_contents]) }}"
							class="btn btn-warning btn-sm text-white">
							<i class="fas fa-pencil-alt fa-sm fa-fw"></i>
						</a>
						<button wire:click='removed({{ $item->id_galleries_contents }})' class="btn btn-danger btn-sm">
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

	<script src="{{ url('/dist/style/js/jquery.js') }}"></script>
	<script>
		document.addEventListener('deleteConfrimed', function() {
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

		window.addEventListener('bannerModalShow', () => {
			$('#bannerModal').modal('show');
		});
		window.addEventListener('bannerModalExpand', () => {
			$('#bannerModal').modal('hide');
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

	</script>
</div>