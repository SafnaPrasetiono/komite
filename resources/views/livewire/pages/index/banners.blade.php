<div>
    <section class="splide" aria-label="banners sliders">
        <div class="splide__track">
            <ul class="splide__list">
                @foreach ($data as $item)
                <div class="splide__slide" data-splide-interval="1000">
                        <img src="{{ url('/images/banners/' . $item->location) }}" class="w-100"
                            alt="{{ $item->banners_name }}">
                </div>
                @endforeach
            </ul>
        </div>
        <div class="splide__arrows splide__arrows--ltr">
            <button
              class="btn-owl splide__arrow--prev btn btn-outline-light d-none d-md-block p-0 position-absolute top-50 start-0 translate-middle-y ms-4"
              type="button"
              style="height: 15%"
            >
            <i class="fas fa-angle-left fa-3x  fa-fw"></i>
            </button>
            <button
              class="btn-owl splide__arrow--next btn btn-outline-light d-none d-md-block p-0 position-absolute position-absolute top-50 end-0 translate-middle-y me-4"
              type="button"
              style="height: 15%"
            >
            <i class="fas fa-angle-right fa-3x fa-fw"></i>
            </button>
          </div>
    </section>

    <script src="{{ asset('/dist/splide/js/splide.min.js') }}"></script>
    <script>
        // new Splide( '.splide' ).mount();
        new Splide( '.splide', {
            type   : 'loop',
            perPage: 1,
        }).mount();
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