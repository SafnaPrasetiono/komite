<div>
    
    <div class="d-flex align-items-center w-100 border-bottom mb-4">
        <p class="mb-0 fs-5 fw-bold text-uppercase px-2 py-3 border-bottom border-primary">Semua Berita</p>
        <div class="dropdown ms-auto">
            <button class="btn btn-outline-primary rounded-0 dropdown-toggle" type="button" id="dropdownMenuButton1"
                data-bs-toggle="dropdown" aria-expanded="false">
                Tampilkan
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">12 Halaman</a></li>
                <li><a class="dropdown-item" href="#">25 Halaman</a></li>
                <li><a class="dropdown-item" href="#">50 Halaman</a></li>
            </ul>
        </div>
        {{-- <div class="d-block position-relative ms-auto">
            <input wire:model="search" type="text" name="search" class="form-control border border-orange rounded-0"
                placeholder="Cari berita terbaru" style="padding-right: 90px;">
            <button class="btn btn-outline-orange rounded-0 position-absolute top-0 end-0 px-4" type="button"
                id="button-addon2">
                <i class="fas fa-search fa-fw"></i>
            </button>
        </div> --}}
    </div>
    @if ($data->count() != 0)    
    @foreach ($data as $item)
    <div class="card border-0 mb-5">
        <div class="row align-items-start g-0">
            <div class="col-12 col-sm-4">
                <div class="btn-images-news ratio ratio-16x9" style="background-image: url('/images/news/{{$item->images}}')">
                </div>
            </div>
            <div class="col-12 col-sm-8">
                <div class="card-body px-0 px-sm-2 px-md-3 py-sm-0 py-md-0">
                    <a href="{{ route('news.detail', ['slug' => $item->slug ]) }}"
                        class="fs-5 link-primary text-decoration-none text-ellipsis-2 mb-0">{{ $item->title }}</a>
                    <p class="card-text mb-2 mb-sm-1"><small class="text-muted">berita, {{ date('d F Y', strtotime($item->created_at)) }}</small></p>
                    <p class="card-text text-ellipsis-4">{{ $item->description }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <nav class="d-block pt-4">
        @if ($data->hasPages())
        <nav class="d-block pt-4">
            {{ $data->links('layouts.paginations') }}
        </nav>
        @endif
    </nav>
    @else
    <div class="card border-0 mb-4">
        <div class="row g-0">
            <div class="col-12">
                <div class="d-block rounded bg-white shadow p-3">
                    <div class="text-center p-3">
                        <i class="fas fa-list fa-2x fa-fw mb-4"></i>
                        <p class="mb-2 fs-5 text-secondary">Oops belum ada berita saat ini</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>