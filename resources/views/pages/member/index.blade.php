@extends('layouts.panel')

@section('head')
<title>komite UMKM - Keanggotaan KOPITU</title>
@endsection

@section('pages')
<div style="height: 70px;"></div>
<div class="elementor pb-3">
    <div class="container">
        <div class="row justify-content-center align-items-center gy-4">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <div class="text-center text-md-start">
                    <h1 class="display-6 fw-bold">Keangotaan</h1>
                    <hr class="soft" style="width: 100px">
                    <p class="mb-5">Komite Pengusaha Mikro Kecil Menengah Indonesia Bersatu (KOPITU) dibentuk sebagai
                        wadah di tingkat nasional yang menyatukan pelaku usaha dan pemangku kepentingan lain baik
                        pemerintah maupun non pemerintah lintas sectoral dan multi sectoral untuk bersinergi
                        meningkatkan kemampuan
                        bersaing UMKM Indonesia</p>
                    <a href="{{ route('member.register') }}" class="btn btn-outline-primary rounded-0 btn-lg px-5 d-none d-md-inline">Daftar
                        Sekarang</a>
                    <a href="{{ route('member.register') }}" class="btn btn-outline-danger rounded-0 btn-lg px-5 d-inline d-md-none">Daftar
                        Sekarang</a>
                </div>

            </div>
            <div class="col-10 col-md-8 col-lg-6 order-1 order-lg-2">
                <img src="{{ url('/images/vector/members.png') }}" alt="about-kopitu" class="img-fluid">
            </div>
        </div>
    </div>
</div>

<div class="alert-info pt-5 pb-4">
    <div class="container pt-3 pb-4">
        <div class="d-block mb-3">
            <h4 class="fw-bold">Keanggotaan KOPITU</h4>
            <p class="mb-0 text-secondary">Berikut ini merupakan anggota KOPITU</p>
        </div>
        <div class="d-block mb-3">
            <section class="splide" aria-label="banners sliders">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php for($x=0; $x<=6; $x++) : ?>
                        <div class="splide__slide" data-splide-interval="1000">
                            <div class="mb-5 mt-4">
                                <div class="d-block text-center">
                                    <img src="{{ url('/images/members/avatar.png') }}" alt="username"
                                        class="rounded-circle" width="120px" height="120px">
                                </div>
                                <div class="card-body text-center bg-white mx-4 pt-5 pb-5"
                                    style="margin-top: -3.5rem; border-radius: 18px;">
                                    <div class="py-3"></div>
                                    <p class="fs-5 mb-0 text-primary">Username</p>
                                    <small class="d-block text-dark mb-2">Email</small>
                                    <div class="d-flex justify-content-center">
                                        <?php for($y=1; $y<=5;$y++) : ?>
                                        <i class="fas fa-star fa-sm fa-fw"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <div class="p-3">
                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque quod neque
                                        sapiente aspernatur exercitationem ab omnis! Ullam quasi dolor praesentium
                                        ratione, obcaecati incidunt dignissimos natus a voluptatibus consequatur amet
                                        tenetur!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endfor; ?>
                    </ul>
                </div>
            </section>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="d-block mb-5">
            <p class="mb-0 fs-3 fw-bold">JENIS KEANGGOTAAN</p>
            <p class="mb-0">bergabunglah bersama kami dan dapatkan manfaatnya</p>
        </div>
        <div class="d-block py-3 mb-5">
            <div class="row g-4 justify-content-center align-items-center">
                <div class="col-10 col-md-7 col-lg-5 mx-auto">
                    <div class="overflow-hidden rounded-3 shadow">
                        <img src="{{ url('/images/elements/kopituCartSilver.jpeg') }}" alt="about-logo"
                            class="h-100 w-100">
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <h3 class="fw-bold">KOPITU SILVER</h3>
                    <hr class="soft" style="width: 100px">
                    <p class="text-capitalize">Merupakan keanggotaan bagi para Pelaku UMKM yang Memiliki Produk. Jenis
                        kartu
                        keanggotaan ini tidak dipungut biaya alis gratis.</p>
                    <ul class="px-3">
                        <li>Pendataan Keikutsertaan Sebagai Anggota KOPITU</li>
                        <li>
                            Kartu Keanggotaan Hanya Berupa Virtual
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-4 alert-primary">
    <div class="container py-5">
        <div class="d-flex align-items-center mb-4">
            <div>
                <h4 class="fw-bold">Bagaimana Cara Mendaftar</h4>
                <p class="mb-0 text-secondary">Yuk simak cara mendaftar kartu keanggotaan</p>
            </div>
            <div class="d-none d-md-flex justify-content-center justify-content-md-end ms-auto">
                <button class="customPrevBtn btn btn-outline-primary p-2 me-2" type="button">
                    <i class="fas fa-angle-left fa-lg fa-fw"></i>
                </button>
                <button class="customNextBtn btn btn-outline-primary p-2" type="button">
                    <i class="fas fa-angle-right fa-lg fa-fw"></i>
                </button>
            </div>
        </div>
        <div class="owl-carousel owl-theme">
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/daftar.png') }}" alt="2" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">DAFTAR</p>
                        <p class="card-text">
                            Pada halaman ini terdapat button daftar di atas silangkan klik button daftar keanggotan yang
                            kamu pilih
                        </p>
                    </div>
                    <div class="pt-5 pb-3">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">1</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/form.png') }}" alt="3" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">FORM</p>
                        <p class="card-text">
                            Silahkan isi form informasi terkait data diri kamu dan pemilihan jenis kartu keanggotaan
                            yang kamu inginkan
                        </p>
                    </div>
                    <div class="pt-5 pb-3">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">2</span>
                    </div>
                </div>
            </div>
            {{-- <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/bayar.png') }}" alt="4" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">BAYAR</p>
                        <p class="card-text">
                            Selanjutnya kamu akan dihadapkan untuk proses konfrimasi pembayaran untuk prosesi
                            pendaftaran keanggotaan
                        </p>
                    </div>
                    <div class="pt-5 pb-3">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">3</span>
                    </div>
                </div>
            </div> --}}
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/konfirmasi.png') }}" alt="6" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">KONFIRMASI</p>
                        <p class="card-text">
                            Pihak kami akan mengkonfirmasi untuk pendaftaran dan pembayaran keanggotaan yang telah kamu
                            daftarkan
                        </p>
                    </div>
                    <div class="pt-5 pb-3">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">3</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/kartu.png') }}" alt="5" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">KARTU</p>
                        <p class="card-text">
                            Kamu akan mendapatkan kartu akses sebagai keanggotaan dari kopitu terkecuali untuk kartu
                            kopitu silver
                        </p>
                    </div>
                    <div class="pt-5 pb-3">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">4</span>
                    </div>
                </div>
            </div>
            <div class="item" style="width: 300px;">
                <div class="card pb-4">
                    <div class="card-body text-center px-4" style="height: 18rem">
                        <img src="{{ url('/images/icons/selesai.png') }}" alt="7" class="w-50 mx-auto">
                        <p class="fs-5 fw-bold text-center">SELESAI</p>
                        <p class="card-text">
                            Yay, selamat kamu telah menjadi anggota bagian dari kami dan rasakan keuntungan yang terlah
                            kami berikan
                        </p>
                    </div>
                    <div class="pt-5 pb-3">
                        <span
                            class="d-flex align-items-center justify-content-center fs-5 mx-auto bg-primary text-white fw-bold rounded-circle"
                            style="width: 46px; height: 46px;">5</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex d-md-none justify-content-center justify-content-md-end ms-auto">
            <button class="customPrevBtn btn btn-outline-primary p-2 me-2" type="button">
                <i class="fas fa-angle-left fa-lg fa-fw"></i>
            </button>
            <button class="customNextBtn btn btn-outline-primary p-2" type="button">
                <i class="fas fa-angle-right fa-lg fa-fw"></i>
            </button>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('/dist/owl/owl.carousel.min.js') }}"></script>
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
    margin:24,
    loop:false,
    autoWidth:true,
    items:4
    })
    $('.customNextBtn').click(function() {
        owl.trigger('next.owl.carousel');
    })
    // Go to the previous item
    $('.customPrevBtn').click(function() {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [300]);
    })
</script>

<script src="{{ asset('/dist/splide/js/splide.min.js') }}"></script>
<script>
    var splide = new Splide( '.splide', {
        type   : 'loop',
        perMove: 1,
        breakpoints: {
            768: {
            perPage: 1,
            },
        },
        perPage: 3
    } );

splide.mount();
</script>
@endsection