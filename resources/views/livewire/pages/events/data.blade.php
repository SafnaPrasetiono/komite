<div>
    <div class="d-flex py-3">
        <div class="ms-auto">
            <input type="text" name="search" id="search" class="form-control" placeholder="Cari Events...">
        </div>
    </div>
    <div class="d-block">
        @foreach ($data as $item)    
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-3">
                    <div class="ratio ratio-3x4">
                        <img src="{{ url('/images/events/' . $item->images) }}" class="img-fluid rounded-start" alt="...">
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text"><small class="text-muted">Jadwal, {{ date('d F Y', strtotime($item->schedule)) }} - {{ date('H:i', strtotime($item->schedule)) }}</small></p>
                        <p class="card-text text-ellipsis-5">{{ $item->description }}</p>
                        <a href="{{ route('events.detail', ['slug' => $item->slug]) }}" class="btn btn-outline-danger">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>