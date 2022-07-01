<div>
    <div class="container">
        <div class="row gx-4 gy-3">
            <div class="col-12 col-lg-8">
                <section class="splide" aria-label="banners sliders">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($data as $item)
                            <div class="splide__slide" data-splide-interval="1000">
                                <div class="card rounded-0 border-0 text-white">
                                    <div class="btn-images-news ratio ratio-16x9"
                                        style="background-image: url('/images/news/{{$item->images}}')">
                                    </div>
                                    <div class="position-absolute bottom-0 px-4 py-3 p-lg-5">
                                        <a href="{{ route('news.detail', ['slug' => $item->slug, 'id' => $item->id_news ]) }}"
                                            class="card-link-news-banners fs-5 text-ellipsis-3 mb-0 text-decoration-none">{{
                                            $item->title }}</a>
                                        <small class="text-light">berita, {{ date('d F Y', strtotime($item->created_at))
                                            }}</small>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
            <div class="col-12 col-lg-4">
                <div class="d-block">
                    <div class="row gy-3">
                        @foreach ($dataSecondary as $item)
                        <div class="col-12 col-sm-6 col-lg-12">
                            <a href="{{ route('news.detail', ['slug' => $item->slug, 'id' => $item->id_news ]) }}"
                                class="card card-news-secondary rounded-0 border-0 text-white">
                                <div class="btn-images-news ratio ratio-16x9"
                                    style="background-image: url('/images/news/{{$item->images}}')">
                                </div>
                                <div class="position-absolute bottom-0 px-4 py-3">
                                    <p class="card-title fs-6 fs-lg-5 text-ellipsis-2 mb-0">{{ $item->title }}</p>
                                    <small class="text-light">berita, {{ date('d F Y', strtotime($item->created_at))
                                        }}</small>
                                </div>
                                {{-- <a href="#" class="btn-news-secondary stretched-link"></a> --}}
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // new Splide( '.splide' ).mount();
        document.addEventListener('DOMContentLoaded', function() {
        new Splide( '.splide', {
            type   : 'loop',
            perPage: 1,
        }).mount();
    });
    </script>
</div>