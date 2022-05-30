@extends('admin.layouts.panel')

@section('head')
    <title>Komite UMKM - Galery</title>
@endsection

@section('pages')
    <div class="container-fluid">
        <div class="d-block rounded bg-white shadow p-3 mb-3">
            <p class="fs-4 fw-bold mb-0">Galery Komite UMKM</p>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
            </ol>
        </div>
        <div class="d-block rounded bg-white shadow p-3 mb-3">
            @livewire('admin.galleries.data')
        </div>
    </div>
@endsection

@section('script')
    
@endsection