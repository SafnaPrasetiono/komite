@extends('admin.layouts.panel')

@section('head')
    <title>Kopitu - Data member kopitu</title>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded bg-white shadow mb-3">
        <div class="p-3 border-bottom">
            <p class="fs-4 fw-bold mb-0">MEMBER KOPITU</p>
        </div>
    </div>
    <div class="d-block">
        @livewire('admin.members.data')
    </div>
</div>
@endsection

@section('script')
    
@endsection