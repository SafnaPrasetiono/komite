<div>
    <div class="pt-5 pb-4" style="background-color: #007bff50;">
        <div class="container pt-3 pb-4">
            <div class="d-block mb-4">
                <h3 class="fw-bold">Keanggotaan KOPITU</h3>
                <p class="mb-0 text-secondary fs-5">Berikut ini merupakan member terbaik KOPITU</p>
            </div>
            <div class="d-block mb-3">
                @if($data->count() != 0)
                <section class="splide" id="splide3" aria-label="banners sliders">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($data as $item)
                            <div class="splide__slide" data-splide-interval="1000">
                                <div class="boxMembers">
                                    <div class="BoxMembersImg">
                                        <div class="imgMembers"
                                            style="background-image: url('/images/members/avatar/{{ $item->avatar }}')">
                                        </div>
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
                @else
                <section class="splide" id="splide3" aria-label="banners sliders">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php for($x=0; $x<=6; $x++) : ?>
                            <div class="splide__slide" data-splide-interval="1000">
                                <div class="boxMembers">
                                    <div class="BoxMembersImg">
                                        <div class="imgMembers"
                                            style="background-image: url('/images/members/avatar.png')"></div>
                                    </div>
                                    <div class="boxMemberContent">
                                        <p class="fs-5 mb-0 text-primary text-capitalize">Username</p>
                                        <small class="d-block text-dark mb-2">Email</small>
                                        <div class="d-flex justify-content-center">
                                            <?php for($y=1; $y<=5;$y++) : ?>
                                            <i class="fas fa-star fa-sm fa-fw"></i>
                                            <?php endfor; ?>
                                        </div>
                                        <div class="p-3">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque quod neque
                                            sapiente aspernatur exercitationem ab omnis! Ullam quasi dolor praesentium
                                            ratione, obcaecati incidunt dignissimos natus a voluptatibus consequatur
                                            amet
                                            tenetur!
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </ul>
                    </div>
                </section>
                @endif
            </div>
        </div>
    </div>

    {{-- <script src="{{ asset('/assets/splide/js/splide.min.js') }}"></script> --}}
    <script>
        document.addEventListener( 'DOMContentLoaded', function() {
          var splide = new Splide( '#splide3', {
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
        });
    </script>
</div>