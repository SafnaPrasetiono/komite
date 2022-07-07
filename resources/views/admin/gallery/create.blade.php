@extends('admin.layouts.panel')

@section('head')
<title>Komite UMKM - Buat galeri baru</title>
<style>
    .editor {
        height: auto;
        min-height: 300px;
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
                <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="50" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 translate-middle bg-primary text-white rounded-pill"
                style="width: 2rem; height:2rem;">1</div>
            <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-50 translate-middle bg-secondary text-white rounded-pill"
                style="width: 2rem; height:2rem;">2</div>
            <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-100 translate-middle bg-secondary text-white rounded-pill"
                style="width: 2rem; height:2rem;">3</div>
        </div>
    </div>
    <form action="{{ route('admin.gallery.post') }}" method="POST">
        @csrf
        <div class="d-block rounded bg-white shadow p-3 mb-3">
            <div class="mb-3">
                <label for="title" class="form-label">Judul Acara</label>
                <input name="title" type="text" class="form-control @error('title') is-invalid  @enderror" value="{{ old('title') }}">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="locations" class="form-label">Lokasi</label>
                <input name="locations" type="text" class="form-control @error('locations') is-invalid  @enderror"
                    id="locations" value="{{ old('locations') }}">
                @error('locations')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="venue" class="form-label">Venue</label>
                <textarea name="venue" id="venue" rows="3"
                    class="form-control @error('venue') is-invalid  @enderror">{{ old('venue') }}</textarea>
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
                        class="form-control @error('date_start') is-invalid  @enderror" value="{{ old('date_start') }}">
                    @error('date_start')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="col-12 col-md-6">
                    <label for="date_end" class="form-label">Tanggal Berakhir</label>
                    <input type="date" name="date_end" id="date_end"
                        class="form-control @error('date_end') is-invalid  @enderror" value="{{ old('date_end') }}">
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
                    class="form-control @error('description') is-invalid  @enderror">{{ old('description') }}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">
                    Selanjutnya <i class="fas fa-arrow-right fa-sm fa-fw"></i>
                </button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('script')
<script>
    // ClassicEditor.create(document.querySelector("#editors"))
    // .then((newEditor) => {
    //     editor = newEditor;
    // })
    // .catch((error) => {
    //     console.error(error);
    // });
    CKEDITOR.replace( 'editors', {
        filebrowserUploadUrl: "{{route('admin.news.upload.editor', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection