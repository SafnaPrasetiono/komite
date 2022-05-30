@extends('admin.layouts.panel')

@section('head')
<title>Kopitu - Data Berita</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded bg-white shadow">
        <div class="p-3 border-bottom">
            <p class="fs-4 fw-bold mb-0">News pages</p>
        </div>
        <div class="d-block p-3">
            @livewire('admin.news.data')
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection