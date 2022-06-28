@extends('layouts.panel')

@section('head')
<title>OOH KUPU KUPU GLOBAL - Galeri Data</title>
<style>
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
    
    .btn-img:hover > .img-gallery{
        transform: scale(1.2);

    }

    @media(max-width: 768px) {
        .btn-img {
            height: 200px;
        }
    }
</style>
@endsection

@section('pages')
<div class="d-block" style="height: 70px"></div>
<div class="d-block py-5 bg-primary">
    <div class="container">
        <h2 class="fw-bold text-white">Galeri Komite UMKM</h2>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('index') }}"
                    class="link-light text-decoration-none">beranda</a></li>
            <li class="breadcrumb-item text-white" aria-current="page">Galeri</li>
        </ol>
    </div>
</div>
<div class="py-3">
    <div class="container">
        @livewire('pages.media.gallery')
    </div>
</div>
@endsection

@section('script')
<script>
    function coba(){
        console.log('allowed');
    }
</script>
@endsection