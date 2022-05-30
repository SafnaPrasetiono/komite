@extends('layouts.panel')

@section('head')
<title>Mitra Strategis – Tentang KOPITU</title>
<link rel="stylesheet" href="{{ url('/dist/style/css/pages/news.css') }}">
<style>
    .card .box-content .btn-galery {
        overflow: hidden;
        border-radius: 4px;
        cursor: pointer;
    }

    .card .box-content .btn-galery:hover .img-galery {
        transform: scale(1.2);
    }

    .card .box-content .img-galery {
        transition: all 0.3s;
        width: 100%;
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection

@section('pages')
<div style="height: 75px;"></div>
@livewire('pages.gallery.data')
@endsection

@section('script')

@endsection