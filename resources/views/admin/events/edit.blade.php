@extends('admin.layouts.panel')

@section('head')
<title>OOH - Ubah acara</title>
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
    <div class="d-block rounded bg-white shadow">
        <div class="p-3 border-bottom">
            <p class="fs-4 fw-bold mb-0">Edit acara</p>
        </div>
        <div class="d-block p-3">
            <form action="{{ route('admin.events.update', ['id' => $data->id_events]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <div class="d-block text-center">
                        <img src="{{ url('/images/events/'. $data->images) }}" alt="" class="rounded" width="50%">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="images" class="form-label">Images</label>
                    <input type="file" name="images" id="images" class="form-control @error('images') is-invalid @enderror">
                    @error('images')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ $data->title }}">
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
                                value="{{ date('Y-m-d', strtotime($data->schedule)) }}">
                                {{-- {{dd( date('m-d-Y', strtotime($data->schedule)) )}} --}}
                            @error('dates')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <input name="times" type="time"
                                class="form-control @error('times') is-invalid @enderror"
                                value="{{ date('H:i:s', strtotime($data->schedule)) }}">
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
                                value="{{ $data->date_start }}">
                            @error('date_start')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <input name="date_end" type="date" class="form-control @error('date_end') is-invalid @enderror"
                                value="{{ $data->date_end }}">
                            @error('date_end')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Small Description</label>
                    <textarea name="description" id="description" rows="3"
                        class="form-control @error('description') is-invalid @enderror">{{ $data->description }}</textarea>
                    @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" id="editors" rows="10"
                        class="form-control @error('content') is-invalid @enderror">{{ $data->content }}</textarea>
                    @error('content')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-outline-secondary form-control">update</button>
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