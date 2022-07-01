<div>
    <div class="py-5 alert alert-info px-0 m-0">
        <div class="container">
            <div class="d-block mb-4">
                <h2>Events</h2>
                <p class="">Update events terbaru komite UMKM</p>
            </div>
            <section class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($data as $item)
                        <li class="splide__slide">
                            <div class="card overflow-hidden mb-3">
                                <div class="row g-0">
                                    <div class="col-12 col-md-5">
                                        <div class="img-events"
                                            style="background-image: url('/images/events/{{ $item->images }}')">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-7">
                                        <div class="card-body px-lg-2">
                                            <a href="{{ route('events.detail', ['slug' => $item->slug]) }}"
                                                class="card-title fs-5 fw-bold text-ellipsis-2 text-decoration-none mb-1">
                                                {{ $item->title }}
                                            </a>
                                            <p class="card-text mb-2"><small class="text-muted">Jadwal, {{ date('d F Y',
                                                    strtotime($item->schedule)) }} - {{ date('H:i',
                                                    strtotime($item->schedule))
                                                    }}</small></p>
                                            <p class="card-text text-ellipsis-4">{{$item->description}}</p>
                                            <a href="{{ route('events.detail', ['slug' => $item->slug]) }}"
                                                class="btn link-primary px-0">Lihat detail <i
                                                    class="fas fa-arrow-right fa-sm fa-fw"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </section>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var splide = new Splide( '.splide', {
                type   : 'loop',
                drag   : 'free',
                gap    : '1rem',
                snap   : true,
                perPage: 2,
                perMove: 1,
                breakpoints: {
                    992: {
                        perPage: 1,
                    }
                },
            } );

            splide.mount();
        });
    </script>
</div>