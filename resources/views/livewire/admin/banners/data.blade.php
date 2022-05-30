<div>
	<div class="d-flex align-items-center py-3">
		<button class="btn btn-primary px-3" wire:click='show'>Tambah</button>
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
					<th>Banner</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $index => $item)
				<tr>
					<th>{{ $index + 1 }}</th>
					<td><img src="{{ url('/images/banners/'. $item->location) }}" alt="" width="120px" class="rounded"></td>
					<td>{{ $item->banners_name }}</td>
					<td>
						<button wire:click='removed({{ $item->id_banners }})' class="btn btn-danger btn-sm">
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

	<div wire:ignore.self class="modal fade" id="bannerModal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">banner</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label for="banner-phone" class="form-label">Banner Phone</label>
						@if ($banners)
						<img src="{{ $banners->temporaryUrl() }}" class="img-fluid rounded mb-2">
						@endif
						<div class="justify-content-center" wire:loading.flex wire:target='banners'>
							<div class="spinner-border" role="status">
								<span class="visually-hidden">Loading...</span>
							</div>
						</div>
						<input wire:model='banners' type="file" name="banner-sm"
							class="form-control @error('banners') is-invalid @enderror" id="banner-phone">
						@error('banners')
						<div class="invalid-feedback">
							{{$message}}
						</div>
						@enderror
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button wire:click='store' type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ url('/dist/style/js/jquery.js') }}"></script>
	<script>
		document.addEventListener('deleteConfrimed', function() {
        Swal.fire({
                title: "Apa anda yakin?",
                text: "Menghapus data banner ini!!!",
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