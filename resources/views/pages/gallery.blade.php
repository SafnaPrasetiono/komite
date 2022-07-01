@extends('layouts.panel')

@section('head')
<title>Komite UMKM - Kaleidoskop Galeri</title>
<style>

    .gallery-date{
        display: flex;
        position: absolute;
        height: 50px;
        margin-top: -25px;
        justify-items: center;
        align-items: center;
        background-color: #0d6efd;
        margin-right: 1rem;
        margin-left: 1rem;
        color: white;
    }

    .btn-img {
        overflow: hidden;
        --bs-aspect-ratio:calc(3 / 4 * 100%);
        border-radius: 4px;
        cursor: pointer;
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
        .gallery-date{
            margin-left: 1rem;
            background-color: #fff;
            color: #0d6efd!important;
            border: 1px solid #0002;
            font-weight: bold;
        }
    }
</style>
@endsection

@section('pages')
<div class="d-block" style="height: 70px"></div>
@livewire('pages.gallery.data')
</div>
@endsection

@section('script')
<script>
    function coba(){
        console.log('allowed');
    }
</script>
@endsection