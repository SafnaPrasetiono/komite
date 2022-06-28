@extends('admin.layouts.panel')

@section('head')
<title>Kopitu Denpasar - Profile admin kopitu</title>
<link rel="stylesheet" href="{{ url('/dist/style/css/admin/profile.css') }}">
@endsection

@section('pages')
<div class="mb-3">
    @livewire('admin.profile.data')
</div>
<div class="mb-3">
    @livewire('admin.profile.password')
</div>
@endsection

@section('script')

@endsection