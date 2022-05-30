@extends('admin.layouts.panel')

@section('head')
<title>Komite UMKM - Buat galeri baru</title>
<style>
    .ck-editor__editable {
        min-height: 200px;
        box-shadow: unset !important;
        border-radius: 0px 0px 4px 4px !important;
    }
</style>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded bg-white shadow p-3 mb-3">
        <p class="fs-4 fw-bold mb-0">Tambah galeri baru</p>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.gallery') }}">Gallery</a></li>
            <li class="breadcrumb-item">Create</li>
        </ol>
    </div>
    <div class="d-block rounded bg-white shadow p-3 mb-3">
        <div class="position-relative m-4">
            <div class="progress" style="height: 1px;">
                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 translate-middle bg-primary text-white rounded-pill"
                style="width: 2rem; height:2rem;">1</div>
            <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-50 translate-middle bg-primary text-white rounded-pill"
                style="width: 2rem; height:2rem;">2</div>
            <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-100 translate-middle bg-secondary text-white rounded-pill"
                style="width: 2rem; height:2rem;">3</div>
        </div>
    </div>
    <div class="d-block rounded bg-white shadow mb-3">
        <div class="d-flex align-items-center py-3 px-4 border-bottom">
            <p class="mb-0 fw-bold">Tambah Images</p>
            <form class="ms-auto" action="{{ route('admin.gallery.create.images.post', ['id' => $id]) }}" enctype="multipart/form-data" method="POST">
                @csrf
                <label for="item-images" class="btn btn-primary px-2 py-1">
                    <i class="fas fa-plus fa-sm fa-fw"></i>
                </label>
                <input name="images[]" type="file" id="item-images" class="d-none" multiple onchange="uploadImages()">
                <input type="submit" id="upload" class="d-none">
            </form>
        </div>
        <div class="p-3">
            @livewire('admin.galleries.data-images', ['id' => $id])
        </div>
        <div class="d-flex p-3">
            <a href="{{ route('admin.gallery.create.finish', ['id' => $id]) }}" class="btn btn-primary">
                Selanjutnya <i class="fas fa-arrow-right fa-sm fa-fw"></i>
            </a>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    function uploadImages(){
        $('#upload').click();
    }
</script>
@endsection