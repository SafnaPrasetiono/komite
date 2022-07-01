<div>
    <div class="bg-blue-4 pt-5 pb-4">
        <div class="container pt-3 pb-4">
            <div class="d-block mb-4">
                <h3 class="fw-bold">Keanggotaan Terbaik</h3>
                <p class="mb-0 text-secondary fs-5">Berikut ini merupakan member terbaik KOPITU Denpasar</p>
            </div>
            <div class="d-block mb-3">
                <section class="splide" aria-label="banners sliders">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($data as $item)
                            <div class="splide__slide" data-splide-interval="1000">
                                <div class="boxMembers">
                                    <div class="BoxMembersImg">
                                        <div class="imgMembers" style="background-image: url('/images/members/avatar/{{ $item->avatar }}')"></div>
                                    </div>
                                    <div class="boxMemberContent">
                                        <p class="fs-5 mb-0 text-primary text-capitalize">{{ $item->username }}</p>
                                        <small class="d-block text-dark mb-2">{{ $item->email }}</small>
                                        <div class="d-flex justify-content-center">
                                            <?php for($y=1; $y<=5;$y++) : ?>
                                            <i class="fas fa-star fa-sm fa-fw"></i>
                                            <?php endfor; ?>
                                        </div>
                                        <div class="px-4 pt-3">
                                            {{ $item->description }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </div>

    <script src="{{ asset('/assets/splide/js/splide.min.js') }}"></script>
    <script>
        var splide = new Splide( '.splide', {
            gap: 20,
            perMove: 1,
            perPage: 3,
            breakpoints: {
                768: {
                perPage: 1,
                },
                999: {
                perPage: 2,
                },
            },
        } );
    
    splide.mount();
    </script>
</div>