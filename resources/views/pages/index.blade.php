@extends('layouts.panel')

@section('head')
<title>Mitra Strategis – Komite Pengusaha Mikro Kecil Menengah Indonesia Bersatu</title>
<link rel="stylesheet" href="{{ url('/dist/style/css/pages/index.css') }}">
<style>
    .banner-images {
        background-repeat: no-repeat;
        background-position: left, bottom;
        background-size: cover;
    }

    .box {
        display: block;
    }
</style>
@endsection

@section('pages')
<div class="py-5 text-dark-blue">
    <div class="d-block" style="height: 70px"></div>
    <div class="background-left"></div>
    <div class="background-right"></div>
    <div class="d-block">
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
                        <h2 class="mb-3 fw-bold animate__animated animate__fadeInUp">KOPITU UMKM INDONESIA</h2>
                        <p class="mb-5 animate__animated animate__fadeInUp animate__fast">KOPITU hadir untuk melakukan
                            pendampingan dan bantuan kepada UMKM dan UKM untuk
                            meningkatkan kesejahteraan UMKM dan UKM dalam pasar dalam negeri maupun ekspor dalam bentuk
                            fasilitasi pelatihan, alih teknologi, pemasaran , bantuan hukum serta penguatan modal usaha
                            dan
                            pembiayaan.</p>
                        <p class="fw-bold text-uppercase animate__animated animate__fadeInUp animate__fast">Yoyok
                            Pitoyo, Salam KOPITU</p>
                    </div>
                    <ul class="nav justify-content-center justify-content-lg-start">
                        <li class="nav-item animate__animated animate__slideInRight">
                            <a class="nav-link links-menu mx-3 ms-lg-0 me-lg-3" aria-current="page" href="#">
                                <img src="{{ url('/images/elements/kopitu-preneur.png') }}" alt="preneur"
                                    class="img-fluid">
                            </a>
                        </li>
                        <li class="nav-item animate__animated animate__slideInRight" style="animation-duration: 1.4s;">
                            <a class="nav-link links-menu mx-3 ms-lg-0 me-lg-3" aria-current="page" href="#">
                                <img src="{{ url('/images/elements/keanggotaan.png') }}" alt="preneur"
                                    class="img-fluid">
                            </a>
                        </li>
                        <li class="nav-item animate__animated animate__slideInRight" style="animation-duration: 1.8s;">
                            <a class="nav-link links-menu mx-3 ms-lg-0 me-lg-3" aria-current="page" href="#">
                                <img src="{{ url('/images/elements/event.png') }}" alt="preneur" class="img-fluid">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="position-relative shadow-sm" style="background-color: #007bff10;">
    <div class="container py-5">
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="link-actived activists-1 shadow rounded-3 py-3">
                    <div class="d-block lh-sm py-4 ms-3">
                        <p class="card-title fw-light fs-3 mb-0">TENTANG</p>
                        <p class="card-text fw-bold fs-3 mb-4">KOPITU</p>
                        <a href="#" class="stretched-link text-decoration-none">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <div class="link-actived activists-2 shadow rounded-3 py-3">
                    <div class="d-block lh-sm py-4 ms-3">
                        <p class="card-title fw-light fs-3 mb-0">BUSINESS</p>
                        <p class="card-text fw-bold fs-3 mb-4">INCUBATORS</p>
                        <a href="#" class="stretched-link text-decoration-none">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="link-actived activists-3 shadow rounded-3 py-3">
                    <div class="d-block lh-sm py-4 ms-3">
                        <p class="card-title fw-light fs-3 mb-0">OUR</p>
                        <p class="card-text fw-bold fs-3 mb-4">PROGRAMS</p>
                        <a href="#" class="stretched-link text-decoration-none">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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


@endsection

@section('script')

@endsection