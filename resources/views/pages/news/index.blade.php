@extends('layouts.panel')

@section('head')
<title>kopitu - berita terkini kopitu</title>
<link rel="stylesheet" href="{{ url('/assets/dist/css/pages/news.css') }}">
@endsection

@section('pages')
<div style="height: 75px;"></div>
<div class="bg-theme-custom py-5">
    <div class="container">
        <div class="d-flex flex-column flex-lg-row align-items-lg-center">
            <div class="mb-3 mb-lg-0">
                <h3 class="fw-bold text-white">BERITA KOPITU</h3>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item text-light"><a href="#" class="link-light">Beranda</a></li>
                    <li class="breadcrumb-item text-light active" aria-current="page">Berita</li>
                </ol>
            </div>
                <div class="d-block position-relative ms-lg-auto">
                    <input wire:model="search" type="text" name="search" class="form-control border border-orange rounded-0"
                        placeholder="Cari berita terbaru" style="padding-right: 90px;">
                    <button class="btn btn-outline-orange rounded-0 position-absolute top-0 end-0 px-4" type="button"
                        id="button-addon2">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
        </div>
    </div>
</div>
<div class="py-4">
    @livewire('pages.news.news-banners')
</div>
<div class="py-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-12 col-lg-8">
                @livewire('pages.news.data')
            </div>
            <div class="col-12 col-lg-4">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="d-block mb-3">
                            <div class="d-flex border-bottom p-0 m-0">
                                <h5 class="border-bottom border-primary py-3 px-2 m-0">Follow Us</h5>
                            </div>
                            <div class="py-3">
                                <div class="row g-2">
                                    
                                    <div class="col-4">
                                        <a href="#" class="btn bg-primary p-0 w-100 py-4">
                                            <div class="text-center text-white">
                                                    <i class="fab fa-facebook fa-lg fa-fw"></i>
                                                    <p class="mb-0 fw-bold">Facebook</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="btn bg-primary p-0 w-100 py-4">
                                            <div class="text-center text-white">
                                                    <i class="fab fa-twitter fa-lg fa-fw"></i>
                                                    <p class="mb-0 fw-bold">Twitter</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="btn bg-primary p-0 w-100 py-4">
                                            <div class="text-center text-white">
                                                    <i class="fab fa-instagram fa-lg fa-fw"></i>
                                                    <p class="mb-0 fw-bold">Instagram</p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="btn bg-primary p-0 w-100 py-4">
                                            <div class="text-center text-white">
                                                    <i class="fab fa-youtube fa-lg fa-fw"></i>
                                                    <p class="mb-0 fw-bold">Youtube</p>
                                            </div>
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="list-group rounded-0 mb-4">
                            <a href="#" class="list-group-item py-3 active" aria-current="true">Berita
                                Terbaru</a>
                            <a href="#" class="list-group-item py-3" aria-current="true">Berita
                                Tranding</a>
                            <a href="#" class="list-group-item py-3" aria-current="true">Berita Lama</a>
                            <a href="#" class="list-group-item py-3" aria-current="true">Berita
                                Pelatihan</a>
                            <a href="#" class="list-group-item py-3" aria-current="true">Semua Berita</a>
                        </div>
                        <div class="d-block mb-3 border p-3">
                            <div class="d-block mb-3">
                                <span class="fw-bold">Cari Berita Berdasarkan Tanggal</span>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Dari Tanggal</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Sampai Tanggal</label>
                                <input type="date" class="form-control">
                            </div>
                            <button class="btn btn-outline-primary form-control">CARI BERITA</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')

@endsection