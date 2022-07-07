@extends('admin.layouts.panel')

@section('head')
<title>Komite UMKM - Edit galeri</title>
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
            <li class="breadcrumb-item">Edit</li>
        </ol>
    </div>
    <form action="{{ route('admin.gallery.update.post', ['id' => $content->id_galleries_contents]) }}" method="POST">
        @csrf
        @method('put')
        <div class="d-block rounded bg-white shadow p-3 mb-3">
            <div class="mb-3">
                <label for="title" class="form-label">Judul Acara</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid  @enderror" value="{{ $content->title }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="locations" class="form-label">Lokasi</label>
                <input name="locations" type="text" class="form-control @error('locations') is-invalid  @enderror"
                    id="locations" value="{{ $content->locations }}">
                @error('locations')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="venue" class="form-label">Venue</label>
                <textarea name="venue" id="venue" rows="3"
                    class="form-control @error('venue') is-invalid  @enderror">{{ $content->venue }}</textarea>
                @error('venue')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="date_start" class="form-label">Tanggal Mulai</label>
                    <input type="date" name="date_start" id="date_start"
                        class="form-control @error('date_start') is-invalid  @enderror" value="{{ $content->date_start }}">
                    @error('date_start')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="date_end" class="form-label">Tanggal Berakhir</label>
                    <input type="date" name="date_end" id="date_end"
                        class="form-control @error('date_end') is-invalid  @enderror" value="{{ $content->date_end }}">
                    @error('date_end')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea name="description" id="editors" rows="3"
                    class="form-control @error('description') is-invalid  @enderror">{{ $content->description }}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-warning px-5">
                    UPDATE
                </button>
            </div>
        </div>
    </form>

    <div class="d-block rounded bg-white shadow mb-3">
        <div class="d-flex align-items-center py-3 px-4 border-bottom">
            <p class="mb-0 fw-bold">Tambah Images</p>
            <form class="ms-auto" action="{{ route('admin.gallery.create.images.post', ['id' => $content->id_galleries_contents]) }}" enctype="multipart/form-data" method="POST">
                @csrf
                <label for="item-images" class="btn btn-primary px-2 py-1">
                    <i class="fas fa-plus fa-sm fa-fw"></i>
                </label>
                <input name="images[]" type="file" id="item-images" class="d-none" multiple onchange="uploadImages()">
                <input type="submit" id="upload" class="d-none">
            </form>
        </div>
        <div class="p-3">
            @livewire('admin.galleries.data-images', ['id' => $content->id_galleries_contents])
        </div>
    </div>

    <div class="d-block rounded bg-white p-3 mb-3">
        <form action="{{ route('admin.gallery.create.finish.post', ['id' => $content->id_galleries_contents]) }}" method="POST">
            @csrf
            <div class="form-check py-1 mb-3 px-4">
                <input name="publish" class="form-check-input" type="checkbox" id="publish" @if($content->publish == true) checked  @endif>
                <label class="form-check-label" for="publish">
                  Publish data galeri
                </label>
              </div>
            <div class="mb-3">
                <button type="submit" class="btn-publish btn btn-primary form-control">Save and publish</button>
            </div>
        </form>
    </div>

</div>
@endsection

@section('script')
<script>
    CKEDITOR.replace( 'editors', {
        filebrowserUploadUrl: "{{route('admin.news.upload.editor', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
<script>
    function uploadImages(){
        $('#upload').click();
    }
</script>
@endsection