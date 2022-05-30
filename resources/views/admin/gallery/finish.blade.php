@extends('admin.layouts.panel')

@section('head')
<title>Komite UMKM - Buat galeri baru</title>
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
                <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="50" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 translate-middle bg-primary text-white rounded-pill"
                style="width: 2rem; height:2rem;">1</div>
            <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-50 translate-middle bg-primary text-white rounded-pill"
                style="width: 2rem; height:2rem;">2</div>
            <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-100 translate-middle bg-primary text-white rounded-pill"
                style="width: 2rem; height:2rem;">3</div>
        </div>
    </div>
    <div class="d-block bg-white p-3 mb-3">
        <div class="alert alert-primary" role="alert">
            <p class="fw-bold"><i class="fas fa-info-circle fa-sm fa-fw"></i> INFO</p>
            <p>Pastikan data yang kamu masukan sudah benar dan tidak terjadi masalah sistem. Jika data yang kamu masukan
                sudah pasti silahkan publish data galery ini untuk memastikan data yang kamu masukan telah masuk kedalam
                sistem dan ditampilkan dihalaman depang</p>
            <p>Centang ceklist dibawah untuk persetujuan publikasi</p>
        </div>
        <form action="{{ route('admin.gallery.create.finish.post', ['id' => $id]) }}" method="POST">
            @csrf
            <div class="form-check py-1 mb-3 px-4">
                <input name="publish" class="form-check-input" type="checkbox" id="publish">
                <label class="form-check-label" for="publish">
                  Publish data galeri
                </label>
              </div>
            <div class="mb-3">
                <button type="submit" class="btn-publish btn btn-primary form-control disabled">Save and publish</button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script>
    $('#publish').click(function () {
        if($(this).prop("checked") == true){
            $('.btn-publish').removeClass('disabled');
        } else {
            $('.btn-publish').addClass('disabled');
        }
    })
</script>
@endsection