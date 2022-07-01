@extends('admin.layouts.panel')

@section('head')
    <title>kopitu - Data sub jenis usaha keanggotaan</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded bg-white shadow mb-3">
        <div class="p-3 border-bottom">
            <p class="fs-4 fw-bold mb-0 text-uppercase">DATA SUB JENIS USAHA</p>
            <p class="mb-0 fs-5">{{ $ctg->categories }}</p>
        </div>
    </div>
    <div class="d-block">
        @livewire('admin.categories.data-sub', ['post' => $ctg->id_categories])
    </div>
</div>
@endsection

@section('script')
    
@endsection