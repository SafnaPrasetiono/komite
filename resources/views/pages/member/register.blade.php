@extends('layouts.panel')

@section('head')
<title>kopitu - Daftar keanggotaan kopitu UMKM</title>
<style>
    .foto-upload {
        position: relative;
        display: flex;
        width: 100%;
        min-height: 120px;
        border: 1px dashed #0007;
        align-items: center;
        justify-content: center;
        border-radius: 4px;
        overflow: hidden;
    }

    .loading-stage {
        position: absolute;
        width: 100%;
        height: 100%;
        align-items: center;
        justify-content: center;
        background-color: #0004;
    }

    .ratio-3x4 {
        --bs-aspect-ratio: calc(4 / 3 * 100%);
    }
</style>
@endsection

@section('pages')
<div style="height: 70px;"></div>
<div class="py-5" style="background-color: #001777;">
    <div class="container">
        <h3 class="fw-bold text-white">Form Pendaftaran Anggota</h3>
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item text-secondary"><a href="{{ route('index') }}" class="link-light text-decoration-none">beranda</a></li>
            <li class="breadcrumb-item text-secondary"><a href="{{ route('member') }}" class="link-light text-decoration-none">Keanggotaan</a></li>
            <li class="breadcrumb-item text-secondary text-white" aria-current="page">Daftar</li>
        </ol>
    </div>
</div>
<div class="py-4">
    <div class="container">
        <form action="{{ route('member.register.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
            @livewire('pages.members.biodata')
            @livewire('pages.members.address')
            @livewire('pages.members.documents')
            @livewire('pages.members.categories')
            @livewire('pages.members.permission')
            <div class="d-block rounded border mb-3">
                <div class="py-2 px-3 border-bottom">
                    <p class="mb-0 fw-bold">Syarat Ketentuan</p>
                </div>
                <div class="p-3">
                    <div class="alert alert-info d-flex align-items-center mb-3">
                        <i class="fas fa-info-circle fa-fw"></i>
                        <p class="mb-0 fw-bold ms-2">Bacalah secara saksama dan jelas agar data kamu lolos dan cepat
                            diproses oleh pihak kami.</p>
                    </div>
                    <div>
                        <p class="fw-bold mb-2">
                            Persyaratan Account
                        </p>
                        <ul>
                            <li>Akun email kamu harus aktif agar pihak kami mudah untuk memberikan informasi</li>
                        </ul>
                    </div>
                    <div>
                        <p class="fw-bold mb-2">
                            Peraturan Biodata dan alamat
                        </p>
                        <ul>
                            <li>Biodata yang kamu inputkan harus sesuai dengan informasi mengenai dirikamu kamu</li>
                            <li>Nomor telepon harus aktif dan sudah terintegrasi dengan whatsapp</li>
                            <li>Alamat harus sesuai dengan domisili diri kamu atau sesuai dengan kediamanmu saat ini
                            </li>
                            <li>Pastikan semua input biodata dan alamat harus terisi semua</li>
                            <li>Upload pas foto harus berukuran 3x4</li>
                            <li>Pastikan nik kamu sesuai dengan ktp kamu</li>
                            <li>Kamu harus upload Kartu Tanda Penduduk(KTP)</li>
                            <li>Format upload semua document ber extensi png, jpg, jpeg atau mpeg</li>
                        </ul>
                    </div>
                    <div>
                        <p class="fw-bold mb-2">
                            Peraturan lainnya
                        </p>
                        <ul>
                            <li>Pilih jenis usaha yang kamu miliki jika tidak ada pilih yang bersangkutan</li>
                            <li>Jika tidak memiliki izin usaha tidak perlu diceklist</li>
                            <li>Jelaskan secara singkat mengenai usaha yang kamu miliki dikolom deskripsi usaha</li>
                        </ul>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="cek1">
                        <label class="form-check-label cek" for="cek1">
                            Saya menerima persyaratan yang telah diberikan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="cek2">
                        <label class="form-check-label cek" for="cek2">
                            Saya dalam kondisi sadar dan sehat melengkapi biodata pendaftaran
                        </label>
                    </div>
                </div>
            </div>
            <div class="d-block rounded border mb-3 p-4">
                <button class="btn btn-primary btn-lg w-100 disabled" id="btnSubmit">DAFTARKAN DIRI SAYA</button>
            </div>
        </form>

    </div>
</div>


@endsection

@section('script')
<script>
    $('#cek1').change(function(){
            if($('#cek1').is(':checked')== true && $('#cek2').is(':checked') == true){
                if($('#btnSubmit').hasClass('disabled')){
                    $('#btnSubmit').removeClass('disabled');
                }
            } else {
                if(!$('#btnSubmit').addClass('disabled')){
                    $('#btnSubmit').addClass('disabled');
                }
            }
    });
    $('#cek2').change(function(){
            if($('#cek1').is(':checked')== true && $('#cek2').is(':checked') == true){
                if($('#btnSubmit').hasClass('disabled')){
                    $('#btnSubmit').removeClass('disabled');
                }
            } else{
                if(!$('#btnSubmit').addClass('disabled')){
                    $('#btnSubmit').addClass('disabled');
                }
            }
    });
</script>
@endsection