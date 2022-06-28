@extends('admin.layouts.panel')

@section('head')
<title>OOH - Tambah acar baru</title>
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
    <div class="d-block rounded bg-white shadow-sm p-3 mb-3">
        <h3 class="fw-bold">Tambah Acara</h3>
        <p class="mb-0 text-secondary">Halaman Tambah Acara Baru</p>
    </div>
    <div class="d-block rounded bg-white shadow mb-3">
        <div class="d-block p-3">
            <form action="{{ route('admin.events.create.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="mb-3">
                    <label for="images" class="form-label">Gambar Berita</label>
                    <input type="file" name="images" id="images"
                        class="form-control @error('images') is-invalid @enderror">
                    @error('images')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Acara</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title') }}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="d-block mb-4">
                    <label for="jadwal" class="form-label">Jadwal Acara</label>
                    <div class="row gy-0 gx-3">
                        <div class="col-12 col-md-6">
                            <input name="dates" type="date"
                                class="form-control @error('dates') is-invalid @enderror"
                                value="{{ old('dates') }}">
                            @error('dates')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <input name="times" type="time"
                                class="form-control @error('times') is-invalid @enderror"
                                value="{{ old('times') }}">
                            @error('times')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="d-block mb-4">
                    <label for="jadwal" class="form-label">Jadwal Pendaftaran</label>
                    <div class="row gy-0 gx-3 mb-3">
                        <div class="col-12 col-md-6">
                            <input name="date_start" type="date"
                                class="form-control @error('date_start') is-invalid @enderror"
                                value="{{ old('date_start') }}">
                            @error('date_start')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <input name="date_end" type="date" class="form-control @error('date_end') is-invalid @enderror"
                                value="{{ old('date_end') }}">
                            @error('date_end')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Penjelasan Singkat</label>
                    <textarea name="description" id="description" rows="3"
                        class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content Berita</label>
                    <textarea name="content" id="editors" rows="10"
                        class="form-control @error('content') is-invalid @enderror">{{ old('content') }}</textarea>
                    @error('content')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-custom-1 form-control">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ url('/dist/ckeditor5/ckeditor.js') }}"></script>
<script>
    ClassicEditor.create(document.querySelector("#editors"))
    .then((newEditor) => {
        editor = newEditor;
    })
    .catch((error) => {
        console.error(error);
    });
</script>
@endsection