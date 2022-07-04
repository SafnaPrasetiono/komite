@extends('admin.layouts.panel')

@section('head')
<title>KOPITU - Video Media Komite UMKM KOPITU</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded-3 bg-white shadow-sm p-3 mb-3">
        <p class="fs-4 fw-bold mb-0">Video Kopitu</p>
        <p class="mb-0">Halaman Video KOPITU</p>
    </div>
    <div class="d-block rounded-3 bg-white shadow-sm p-3 mb-3">
        @livewire('admin.media.video')
    </div>
</div>
@endsection

@section('script')

@endsection