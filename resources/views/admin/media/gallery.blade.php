@extends('admin.layouts.panel')

@section('head')
<title>OOH Admin - Galeri</title>
<style>
    .img-galleries{
        width: 100%;
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@endsection

@section('pages')
<div class="container-fluid">
    <div class="d-block rounded-3 bg-white shadow-sm p-3 mb-3">
        <p class="fs-4 fw-bold mb-0">Galeri OOH</p>
        <p class="mb-0 text-secondary">Halaman Data Foto  OOH Kupu-Kupu Global</p>
    </div>
    <div class="d-block rounded-3 bg-white shadow-sm mb-3">
        <div class="d-flex align-items-center py-3 px-4 border-bottom">
            <p class="mb-0 fw-bold">Tambah Images</p>
            <form class="ms-auto" action="{{ route('admin.gallery.post') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <label for="item-images" class="btn btn-primary px-2 py-1">
                    <i class="fas fa-plus fa-sm fa-fw"></i>
                </label>
                <input name="images[]" type="file" id="item-images" class="d-none" multiple onchange="uploadImages()">
                <input type="submit" id="upload" class="d-none">
            </form>
        </div>
        <div class="p-3">
            @livewire('admin.media.gallery')
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