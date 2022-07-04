@extends('layouts.panel')

@section('head')
<title>Mitra Strategis – Komite Pengusaha Mikro Kecil Menengah Indonesia Bersatu</title>
<link rel="stylesheet" href="{{ url('/assets/dist/css/pages/index.css') }}">
<style>
    .box-banners {
        display: block;
        width: 100%;
        overflow: hidden !important;
        position: relative;
    }

    .banner-images {
        background-repeat: no-repeat;
        background-position: left, bottom;
        background-size: cover;
    }

    .box {
        display: block;
    }

    .btn-img {
        width: 100%;
        height: 280px;
        overflow: hidden;
        padding: 0;
        border: 0px;
    }

    .img-gallery {
        width: 100%;
        height: 100%;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        transition: all 0.2s;
    }

    .btn-img:hover>.img-gallery {
        transform: scale(1.2);

    }

    @media(max-width: 992px) {
        .btn-img {
            height: 200px;
        }
    }
</style>
@endsection

@section('pages')
<div class="box-banners py-5">
    <div class="d-block w-100" style="height: 70px"></div>
    <div class="background-left"></div>
    <div class="background-right"></div>
    <div class="container">
        <div class="row justify-content-md-center align-items-center gy-5">
            <div class="col-12 col-sm-9 col-md-8 col-lg-6">
                <img src="{{ url('/images/elements/yoyok-banners.png') }}" alt="yoyok-pitoyo"
                    class="img-fluid w-100 d-none d-lg-block animate__animated animate__fadeIn animate__slow">
                <img src="{{ url('/images/elements/yoyok.png') }}" alt="yoyok-pitoyo"
                    class="img-fluid w-100 d-block d-lg-none animate__animated animate__fadeIn animate__slow">
            </div>
            <div class="col-12 col-lg-6">
                <div class="text-center text-lg-start mb-3">
                    <h2 class="mb-3 fw-bold animate__animated animate__fadeInUp">UKM Juara di Negeri Sendiri & Mendunia
                    </h2>
                    <p class="mb-2 text-wellcome animate__animated animate__fadeInUp animate__fast">
                        Masa pandemi sudah hampir kita lalui, para pelaku UMKM maupun Koperasi diharapkan untuk
                        terus bersemangat dan survive menghadapi gejolak ekonomi dampak dari Pandemi Covid-19. Besar
                        harapan, para pelaku UMKM dan Koperasi bisa terus bertumbuh, berkembang, inovatif dan
                        kreatif.
                    </p>
                    <p class="mb-2 text-wellcome animate__animated animate__fadeInUp animate__fast">
                        KOPITU hadir dan berperan langsung melakukan pendampingan kepada UMKM dan Koperasi untuk
                        meningkatkan kesejahteraan dengan semboyan “UMKM Juara di Negeri sendiri dan Mendunia” dalam
                        bentuk fasilitasi melalui program-program KOPITU seperti KOPITUPRENEUR, KOPITU Bisnis
                        Inkubator, Sister City, Penetrasi market di luar negeri (Kopitu E Store) Tanipreuner dan
                        lainnya. informasi lengkap terkait program-program kopitu, bisa diakses melalui Kopitu.co.id
                    </p>
                    <p class="mb-2 text-wellcome animate__animated animate__fadeInUp animate__fast">
                        Sesuai Visi & Misi KOPITU, besar harapan UMKM dan Koperasi bisa Mandiri, Naik Kelas, dan Go
                        Global (Ekspor) Melalui program kerja KOPITU yang kongkrit, KOPITU mengajak berbagai pihak seperti
                        Pemerintah, Swasta, Lembaga-lembaga maupun Individu untuk berkolaborasi membangun UMKM
                        Indonesia agar UMKM dapat Juara di Negeri sendiri dan Mendunia.
                    </p>
                    <p class="fw-bold text-uppercase animate__animated animate__fadeInUp animate__fast">
                        Salam KOPITU, <br>
                        Yoyok Pitoyo
                    </p>
                </div>
                <ul class="nav justify-content-center justify-content-lg-start">
                    <li class="nav-item animate__animated animate__slideInRight">
                        <a class="nav-link links-menu p-0 mx-2 ms-lg-0 me-lg-3" aria-current="page" href="#">
                            <img src="{{ url('/images/elements/kopitu-preneur.png') }}" alt="preneur" class="img-fluid"
                                width="84px" height="84px">
                        </a>
                    </li>
                    <li class="nav-item animate__animated animate__slideInRight" style="animation-duration: 1.4s;">
                        <a class="nav-link links-menu p-0 mx-2 ms-lg-0 me-lg-3" aria-current="page" href="#">
                            <img src="{{ url('/images/elements/bisnis-inkubator.png') }}" alt="preneur"
                                class="img-fluid" width="84px" height="84px">
                        </a>
                    </li>
                    <li class="nav-item animate__animated animate__slideInRight" style="animation-duration: 1.4s;">
                        <a class="nav-link links-menu p-0 mx-2 ms-lg-0 me-lg-3" aria-current="page" href="#">
                            <img src="{{ url('/images/elements/about-me.png') }}" alt="preneur"
                                class="img-fluid" width="84px" height="84px">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="position-relative py-5" style="background-color: #007bff10;">
    <div class="container mb-3">
        <div class="d-block py-1 mb-3">
            <h3 class="mb-0 fw-bold">KOPITU Program</h3>
            <p>KOPITU menyediakan berbagai macam program</p>
        </div>
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
                <a class="link-boxs" href="#">
                    <div class="row g-3 align-items-center justify-content-center">
                        <div class="col-7">
                            <h3 class="fw-light mb-1">Kopitu</h3>
                            <h3 class="fw-bold mb-3">PRENEUR</h3>
                            <p class="mb-0 text-primary">READ MORE</i></p>
                        </div>
                        <div class="col-5 ms-md-auto">
                            <img src="{{ url('/images/service/kopitu-preneur-icons.png') }}" alt="kopitu_preneur" class="img-fluid">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a class="link-boxs" href="#">
                    <div class="row g-3 align-items-center justify-content-center">
                        <div class="col-7">
                            <h3 class="fw-light mb-1">Bisnis</h3>
                            <h3 class="fw-bold mb-3">INCUBATORS</h3>
                            <p class="mb-0 text-primary">READ MORE</i></p>
                        </div>
                        <div class="col-5 ms-md-auto">
                            <img src="{{ url('/images/service/bisnis-incubators-icons.png') }}" alt="kopitu_estore" class="img-fluid">
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <a class="link-boxs" href="https://kopitu.com" target="blank">
                    <div class="row g-3 align-items-center justify-content-center">
                        <div class="col-7">
                            <h3 class="fw-light mb-1">Kopitu</h3>
                            <h3 class="fw-bold mb-3">E-STORE</h3>
                            <p class="mb-0 text-primary">READ MORE</i></p>
                        </div>
                        <div class="col-5 ms-md-auto">
                            <img src="{{ url('/images/service/estore.png') }}" alt="kopitu_estore" class="img-fluid">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@livewire('pages.index.videos')
@livewire('pages.index.invitation')
@livewire('pages.index.news')
@livewire('pages.index.events')

{{-- <div class="py-4 mb-4">
    <div class="container">
        <div class="d-flex align-items-center mb-4">
            <h4 class="fw-bold">Video Kopitu</h4>
            <a href="#" class="btn btn-outline-primary rounded-pill py-1 ms-auto">
                Semua <i class="fas fa-angle-right fa-sm fa-fw"></i>
            </a>
        </div>
        <div class="row justify-content-center g-4">
            <?php for ($i = 0; $i < 3; $i++) : ?>
            <div class="col-12 col-lg-4">
                <video id="my-video" class="ratio ratio-16x9" controls preload="auto" controls>
                    <source src="{{url('/videos/vid-01.mp4' )}}" type="video/mp4" />
                </video>
            </div>
            <?php endfor;?>
            <?php for ($i = 0; $i < 2; $i++) : ?>
            <div class="col-12 col-lg-6">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/tQE1PpErmDc" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="text-center py-2 px-3">
                    <p class="text-ellipsis-2 mb-0 fw-bold">Marsh Kopitu</p>
                </div>
            </div>
            <?php endfor;?>
        </div>
    </div>
</div> --}}
@livewire('pages.index.galeri')
@livewire('pages.index.count-members')
@livewire('pages.index.members')
@endsection

@section('script')

@endsection