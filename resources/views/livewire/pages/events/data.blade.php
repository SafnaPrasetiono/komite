<div>
    <div class="d-flex py-3">
        <div class="ms-auto">
            <input type="text" name="search" id="search" class="form-control" placeholder="Cari Events...">
        </div>
    </div>
    <div class="d-block">
        @foreach ($data as $item)
        <div class="card flex-columnt flex-md-row overflow-hidden mb-3">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="img-events" style="background-image: url('/images/events/{{ $item->images }}')">
                </div>
            </div>
            <div class="card-body">
                <a href="{{ route('events.detail', ['slug' => $item->slug]) }}" class="card-title fs-5 fw-bold text-ellipsis-2 text-decoration-none mb-1">
                    {{ $item->title }}
                </a>
                <p class="card-text"><small class="text-muted">Jadwal, {{ date('d F Y', strtotime($item->schedule)) }} -
                        {{ date('H:i', strtotime($item->schedule)) }}</small></p>
                <p class="card-text text-ellipsis-5 mb-3">{{ $item->description }}</p>
                <a href="{{ route('events.detail', ['slug' => $item->slug]) }}" class="btn link-primary px-0">Lihat detail <i
                    class="fas fa-arrow-right fa-sm fa-fw"></i> </a>
            </div>
        </div>
        @endforeach

    </div>
</div>