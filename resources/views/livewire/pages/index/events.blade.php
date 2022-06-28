<div>
    <div class="py-5 alert-secondary">
        <div class="container">
            <div class="row">
                @foreach ($data as $item)
                <div class="col-12 col-xl-6">
                    <div class="card flex-row overflow-hidden mb-3">
                        <div class="ratio ratio-3x4-index">
                            <div class="img-events" style="background-image: url('/images/events/{{ $item->images }}')">
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('events.detail', ['slug' => $item->slug]) }}" class="card-title fs-5 fw-bold text-ellipsis-2 text-decoration-none mb-1">
                                {{ $item->title }}
                            </a>
                            <p class="card-text mb-2"><small class="text-muted">Jadwal, {{ date('d F Y', strtotime($item->schedule)) }} - {{ date('H:i', strtotime($item->schedule)) }}</small></p>
                            <p class="card-text text-ellipsis-4">{{$item->description}}</p>
                            <a href="{{ route('events.detail', ['slug' => $item->slug]) }}" class="btn link-primary px-0">Lihat detail <i
                                class="fas fa-arrow-right fa-sm fa-fw"></i> </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>