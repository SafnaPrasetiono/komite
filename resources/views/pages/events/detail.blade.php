@extends('layouts.panel')

@section('head')
<title>Komite UMKM - Detail Events {{ $data->title }}</title>
<style>
    .img-banners {
        width: 100%;
        height: 100%;
        background-position: top;
        background-size: cover;
        background-repeat: no-repeat;
    }
    .ratio-3x4{
        --bs-aspect-ratio: calc(4 / 3 * 100%);
    }
</style>
@endsection

@section('pages')
<div class="d-block" style="height: 70px"></div>
<div class="py-5 bg-primary">
    <div class="container">
        <h2 class="fw-bold text-white">{{ $data->title }}</h2>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{ route('index') }}"
                    class="link-light text-decoration-none">beranda</a>
                </li>
            <li class="breadcrumb-item text-white">
                <a href="{{ route('events') }}"
                    class="link-light text-decoration-none">events</a>
            </li>
            <li class="breadcrumb-item text-white">{{$data->slug}}</li>
        </ol>
    </div>
</div>
<div class="py-5 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <img src="{{ url('/images/events/' . $data->images) }}" alt="{{ $data->slug }}" class="img-fluid">
            </div>
            <div class="col-12 col-lg-8">
                <p><?php echo $data['content'] ?></p>
            </div>
        </div>
    </div>
</div>
<div class="py-5">
    <div class="container">
        <div class="row g-3">
            <div class="col-6 col-lg-3">
                <div class="d-block h-100 p-3 text-center border rounded">
                    <i class="fas fa-calendar-alt fa-4x fa-fw mb-3"></i>
                    <div class="py-2">
                        <p class="mb-0">Jadwal Acara</p>
                        <p class="fw-bold text-uppercase">{{ date('d F Y', strtotime($data->schedule)) }} - {{ date('h:i a', strtotime($data->schedule)) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="d-block h-100 p-3 text-center border rounded">
                    <i class="fas fa-clock fa-4x fa-fw mb-3"></i>
                    <div class="py-2">
                        <p class="mb-0">Jadwal Pendaftaran</p>
                        <p class="fw-bold text-uppercase">{{ date('d F Y', strtotime($data->date_start)) }} - {{ date('d F Y', strtotime($data->date_end)) }}</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="d-block h-100 p-3 text-center border rounded">
                    <i class="fas fa-users fa-4x fa-fw mb-3"></i>
                    <div class="py-2">
                        <p class="mb-0">Kuota Pendaftaran</p>
                        <p class="fw-bold">100 orang</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="d-block h-100 p-3 text-center border rounded">
                    <i class="far fa-users fa-4x fa-fw mb-3"></i>
                    <div class="py-2">
                        <p class="mb-0">Jumlah Terdaftar</p>
                        <p class="fw-bold">{{ $registrar }} orang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-5 alert-secondary">
    <div class="container">
        @livewire('pages.events.register', ['post' => $data->id_events])
    </div>
</div>
<div class="py-5">
    <div class="container">
        @livewire('pages.events.member', ['post' => $data->id_events])
    </div>
</div>
@endsection

@section('script')

@endsection