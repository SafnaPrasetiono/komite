<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="safna prasetiono">
    <meta name="description"
        content="Komite Pengusaha Mikro Kecil Menengah Indonesia Bersatu (KOPITU) dibentuk sebagai wadah di tingkat nasional yang menyatukan pelaku usaha dan pemangku kepentingan lain baik pemerintah maupun non pemerintah lintas sectoral dan multi sectoral untuk bersinergi meningkatkan kemampuan bersaing UMKM Indonesia.">
    <meta name="keywords" content="kopitu, kopitu umkm, komite, komite umkm, komite-umkm, umkm"
        type="application/rss+xml" title="Komite Pengusaha Mikro Kecil Menengah Indonesia Bersatu » Feed">
    <link rel="alternate" type="application/rss+xml"
        title="Komite Pengusaha Mikro Kecil Menengah Indonesia Bersatu » Comments Feed">

    <meta name="msapplication-navbutton-color" content="#ffffff" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#ffffff" />
    <link rel="icon" type="image/png" href="{{asset('/images/logo/kopitu.png')}}" />

    @yield('head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Pacifico&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/assets/app/css/app.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/icons/css/all.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/dist/css/color.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/dist/css/index.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/dist/css/animated.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/splide/css/splide.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/owl/css/owl.carousel.min.css') }}">

    @livewireStyles
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('index') }}">
                <img src="{{ url('/images/logo/kopitu.png') }}" alt="" height="46px" style="margin-top: -8px">
                <span class="fs-4">KOPITU</span>
            </a>
            <button class="btn px-3 d-inline d-lg-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <i class="fas fa-bars fa-sm fa-fw"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSlider">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link link-blue fw-bold" href="{{ route('index') }}">BERANDA</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link-blue fw-bold" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            PROGRAM
                        </a>
                        <ul class="dropdown-menu border-0 shadow" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Kopitu Preneur</a></li>
                            <li><a class="dropdown-item" href="#">Kopitu Bisnis Inkubator</a></li>
                            <li><a class="dropdown-item" href="https://kopitu.com">Kopitu E-Store</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-blue fw-bold" href="{{ route('member') }}">KEANGGOTAAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-blue fw-bold" href="{{ route('news') }}">BERITA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-blue fw-bold" href="{{ route('events') }}">EVENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-blue fw-bold" href="{{ route('gallery') }}">KALEIDOSKOP GALERI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-blue fw-bold" href="{{ route('aboutus') }}">TENTANG KAMI</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav ms-auto" id="navAccordion">
                <li class="nav-item">
                    <a class="nav-link link-blue fw-bold" href="{{ route('index') }}">BERANDA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed link-blue fw-bold " href="#" data-bs-toggle="collapse"
                        data-bs-target="#program">
                        PROGRAM <i class="indications fas fa-angle-down fa-sm fa-fw"></i>
                    </a>
                </li>
                <div id="program" class="accordion-collapse collapse">
                    <li class="nav-item">
                        <a class="nav-link link-blue fw-bold ms-3" href="#">KOPITU PRENEUR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-blue fw-bold ms-3" href="#">KOPITU INKUBATOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-blue fw-bold ms-3" href="https://kopitu.com" target="blank">KOPITU
                            E-STORE</a>
                    </li>
                </div>
                <li class="nav-item">
                    <a class="nav-link link-blue fw-bold" href="{{ route('member') }}">KEANGGOTAAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-blue fw-bold" href="{{ route('news') }}">BERITA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-blue fw-bold" href="{{ route('events') }}">EVENT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-blue fw-bold" href="{{ route('gallery') }}">KALEIDOSKOP GALERI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-blue fw-bold" href="{{ route('aboutus') }}">TENTANG KAMI</a>
                </li>
            </ul>
        </div>
    </div>

    <section>
        @yield('pages')
    </section>

    <footer>
        <div class="bg-theme-custom py-5">
            <div class="container py-4">
                <div class="row gy-4">
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="text-white mb-4">
                            <span class="fw-bold fs-5 fw-bold">Info Kopitu</span>
                            <hr class="soft" width="50px">
                            <div class="pe-0 pe-md-5">
                                <p>
                                    Website ini dibuat untuk memberikan kemudahan kepada umkm dan umk dalam pendaftaraan
                                    keanggotaan, memberikan informasi evetns, bantuan dalam mengurus perizinan dan
                                    berita terbaru seputar umkm, Provinsi, Nasional maupun Internasional
                                </p>
                                <div class="d-flex mb-2">
                                    <i class="fas fa-phone fa-fw"></i>
                                    <p class="mb-0 ms-2">+62 813-2519-9663</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <p class="mb-0 ms-2 text-lowercase">SEKRETARIAT@KOMITE-UMKM.ORG</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <p class="mb-0 ms-2 text-lowercase">KOPITUMEDIA@GMAIL.COM</p>
                                </div>
                                <div class="d-flex mb-2">
                                    <i class="fas fa-map-marked fa-fw"></i>
                                    <p class="mb-0 ms-2">Jl. Letjen S. Parman No.kav.28, Tj. Duren Sel., Kec. Grogol
                                        petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11470</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2">
                        <div class="text-white">
                            <span class="fw-bold fs-5">Link Terkait</span>
                            <hr class="soft" width="50px">
                            <nav class="nav flex-column">
                                <a class="nav-link link-light px-0" href="https://balisanitya.com/">Kopitu Denpasar</a>
                                <a class="nav-link link-light px-0" href="https://lumbungdeso.id/">Kopitu Preneur</a>
                                <a class="nav-link link-light px-0 active" aria-current="page" href="#">Kopitu
                                    E-Store</a>
                                <a class="nav-link link-light px-0 active" aria-current="page" href="#">Keanggotaan</a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-2">
                        <div class="text-white">
                            <span class="fw-bold fs-5">Link Terkait</span>
                            <hr class="soft" width="50px">
                            <nav class="nav flex-column">
                                <a class="nav-link link-light px-0" href="https://balisanitya.com/">Berita Terkini</a>
                                <a class="nav-link link-light px-0" href="https://lumbungdeso.id/">Syarat
                                    Pendaftaran</a>
                                <a class="nav-link link-light px-0 active" aria-current="page" href="#">Cara
                                    Mendaftar</a>
                                <a class="nav-link link-light px-0" href="#">Tentang Kami</a>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-white">
                            <span class="fw-bold fs-5 fw-bold">Social Media</span>
                            <hr class="soft" width="50px">
                            <nav class="nav">
                                <a class="nav-link py-0 px-0 me-3" target="balnk"
                                    href="https://web.facebook.com/kopitu.jaya.5">
                                    <img src="{{ url('/images/icons/facebook.png') }}" alt="facebook"
                                        class="rounded-circle" width="42px" height="42px">
                                </a>
                                <a class="nav-link py-0 px-0 me-3" target="balnk"
                                    href="https://twitter.com/KomiteKecil">
                                    <img src="{{ url('/images/icons/twitter.png') }}" alt="twitter"
                                        class="rounded-circle" width="42px" height="42px">
                                </a>
                                <a class="nav-link py-0 px-0 me-3" target="balnk"
                                    href="https://www.instagram.com/kopitu_/">
                                    <img src="{{ url('/images/icons/instagram.png') }}" alt="instagram"
                                        class="rounded-circle" width="42px" height="42px">
                                </a>
                                <a class="nav-link py-0 px-0 me-3" target="balnk"
                                    href="https://www.youtube.com/channel/UCYiyFf5yxGanApgx9NE2rKQ/videos">
                                    <img src="{{ url('/images/icons/youtube.png') }}" alt="youtube"
                                        class="rounded-circle" width="42px" height="42px">
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3" style="background-color: #fff">
            <div class="container">
                <div class="text-center text-dark">
                    <small>COPYRIGHT © 2019 KOPITU. ALL RIGHTS RESERVED | DEVELOPED BY <span class="text-danger">IT
                            KOPITU</span></small>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ url('/assets/dist/js/jquery.js') }}"></script>
    <script src="{{ url('/assets/dist/js/popper.js') }}"></script>
    <script src="{{ url('/assets/app/js/app.js') }}"></script>
    <script src="{{ url('/assets/dist/js/alert.js') }}"></script>
    <script src="{{ url('/assets/dist/js/index.js') }}"></script>
    <script src="{{ asset('/assets/owl/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/assets/splide/js/splide.min.js') }}"></script>
    @livewireScripts
    @yield('script')

    @if(session()->has('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Good Jobs!',
            text: '{{ session()->get("success") }}',
        })
    </script>
    @elseif(session()->has('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Opps...!',
            text: '{{ session()->get("error") }}',
        })
    </script>
    @endif
</body>

</html>