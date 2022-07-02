@extends('layouts.panel')

@section('head')
<meta name="description" content="{{ $data->description }}">
{{-- <meta name="keywords" content=""> --}}
<title>kopitu - {{ $data->title }}</title>
<link rel="stylesheet" href="{{ url('/dist/style/css/pages/news.css') }}">
@endsection

@section('pages')
<div style="height: 70px;"></div>
<div class="bg-theme-custom py-5">
    <div class="container">
        <div class="d-flex flex-column flex-lg-row align-items-lg-center">
            <div class="mb-3 mb-lg-0">
                <h2 class="mb-2 fw-bold text-capitalize text-light">{{ $data->title }}</h2>
                <p class="text-white">Tanggal posting, {{ date('d F Y', strtotime($data->created_at)) }}</p>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item text-light"><a href="{{ route('index') }}" class="link-light">Beranda</a></li>
                    <li class="breadcrumb-item text-light" aria-current="page"><a href="{{ route('news') }}" class="link-light">Berita</a></li>
                    <li class="breadcrumb-item text-light" aria-current="page">{{ $data->slug }}</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="py-4 py-md-5">
    <div class="container">
        <div class="row gx-0 gy-5">
            <div class="col-12 col-lg-9 pe-0 pe-lg-5">
                <div class="d-block rounded mb-4 pb-3">
                    <div class="mb-3">
                        <img src="{{ url('/images/news/' . $data->images ) }}" alt="{{ $data->title }}" class="img-fluid w-100 rounded">
                    </div>
                    <div class="d-block text-break p-2">
                        <?php echo $data->content ?>
                    </div>
                </div>
                <div class="d-block">
                    @livewire('pages.news.comment')
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="list-group rounded-0 mb-4">
                    <a href="#" class="list-group-item list-group-item-action py-3 active" aria-current="true">Berita
                        Terbaru</a>
                    <a href="#" class="list-group-item list-group-item-action py-3" aria-current="true">Berita
                        Tranding</a>
                    <a href="#" class="list-group-item list-group-item-action py-3" aria-current="true">Berita Lama</a>
                    <a href="#" class="list-group-item list-group-item-action py-3" aria-current="true">Berita
                        Pelatihan</a>
                    <a href="#" class="list-group-item list-group-item-action py-3" aria-current="true">Semua Berita</a>
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
@endsection


@section('script')

@endsection