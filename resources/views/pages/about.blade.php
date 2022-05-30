@extends('layouts.panel')

@section('head')
<title>Mitra Strategis – Tentang KOPITU</title>
@endsection

@section('pages')
<div style="height: 75px;"></div>
<div class="elementor pb-5">
    <div class="container">
        <div class="row justify-content-center align-items-center gy-4">
            <div class="col-12 col-lg-7 order-2 order-lg-1">
                <h1 class="display-5">Tentang Kami</h1>
                <hr class="soft" style="width: 100px">
                <p class="fs-5">Komite Pengusaha Mikro Kecil Menengah Indonesia Bersatu (KOPITU) dibentuk sebagai wadah di tingkat nasional yang menyatukan pelaku usaha dan pemangku kepentingan lain baik pemerintah maupun
                    non pemerintah lintas sectoral dan multi sectoral untuk bersinergi meningkatkan kemampuan bersaing
                    UMKM Indonesia</p>
            </div>
            <div class="col-10 col-md-8 col-lg-5 order-1 order-lg-2">
                <img src="{{ url('/images/elements/about-kopitu.png') }}" alt="about-kopitu" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<div class="alert-secondary py-5">
    <div class="container">
        <h1 class="mb-4">KOMITE PENGUSAHA MIKRO KECIL MENENGAH INDONESIA BERSATU (KOPITU)</h1>
        <p>Peran Usaha Mikro Kecil dan Menengah (UMKM) atau Usaha Kecil Menengah (UKM) dalam pertumbuhan perekonomian suatu negara dinilai penting. UMKM memiliki kontribusi besar dan krusial bagi perekonomian Indonesia. Kriteria UMKM Menurut Undang-undang Nomor 20 Tahun 2008 tentang Usaha Mikro, Kecil dan Menengah (UMKM) usaha kecil didefinisikan sebagai kegiatan ekonomi produktif yang berdiri sendiri.</p>
        <p>Usaha ini dilakukan perorangan atau badan usaha yang bukan merupakan anak perusahaan atau bukan cabang perusahaan yang dimiliki, dikuasai atau menjadi bagian baik langsung maupun tidak langsung dari usaha menengah atau usaha besar serta memenuhi kriteria lain. Dalam UU tersebut juga dijelaskan perbedaan kriteria UMKM dengan Usaha Besar.</p>
        <ol>
            <li>Usaha Mikro: aset maksimal Rp 50 juta (tidak termasuk tanah dan bangunan tempat usaha) dan omzet
                maksimal Rp 300 juta per tahun.</li>
            <li>Usaha Kecil: aset lebih dari Rp 50 juta – Rp 500 juta (tidak termasuk tanah dan bangunan tempat usaha)
                dan omzet maksimal lebih dari Rp 300 juta – Rp 2,5 miliar per tahun.</li>
            <li>
                Usaha Menengah: aset lebih dari Rp 500 juta – Rp 10 miliar (tidak termasuk tanah dan bangunan tempat
                usaha) dan omzet lebih dari Rp 2,5 miliar – Rp 50 miliar per tahun.
            </li>
            <li>
                Usaha Besar: aset lebih dari Rp 10 miliar (tidak termasuk tanah dan bangunan tempat usaha) dan omzet
                lebih dari Rp 50 miliar per tahun.
            </li>
        </ol>
        <p>UMKM merupakan pilar terpenting dalam perekonomian Indonesia. Berdasarkan data Kementerian Koperasi dan UKM, jumlah UMKM saat ini mencapai 64,2 juta dengan kontribusi terhadap PDB sebesar 61,07% atau senilai 8.573,89 triliun rupiah. Kontribusi UMKM terhadap perekonomian Indonesia meliputi kemampuan menyerap 97% dari total tenaga kerja yang ada serta dapat menghimpun sampai 60,4% dari total investasi. Namun, tingginya jumlah UMKM di Indonesia juga tidak terlepas dari tantangan yang ada.</p>
        <p>Salah satu tantangan yang ada saat ini yaitu Pandemi COVID-19. Dampak dari pandemi ini salah satu contohnya adalah mendorong shifting pola konsumsi barang dan jasa dari offline ke online, dengan adanya kenaikan trafik internet berkisar 15-20%. Hal ini menjadi momentum untuk mengakselerasi transformasi digital. Potensi digital ekonomi Indonesia juga masih terbuka lebar dengan jumlah populasi terbesar ke-4 di dunia dan penetrasi internet yang telah menjangkau 196,7 juta orang.</p>
        <p>Di samping itu, perubahan iklim bisnis secara luas dapat mempengaruhi produktivitas dan aktivitas UMKM. Oleh karena itu, diperlukan tidak hanya koordinasi dan aggregasi satu arah atau mono sectoral untuk mempertahankan eksistensi dan menumbuh kembangkan UMKM di Indonesia.</p>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center mb-4">
            <div class="col-10 col-md-8 col-lg-5">
                <img src="{{ url('/images/elements/about-logo.png') }}" alt="about-logo" class="img-fluid">
            </div>
            <div class="col-12 col-lg-7">
                <h1 class="fw-bold">FILOSOFI LOGO KOPITU</h1>
                <ul class="px-3">
                    <li><span class="fw-bold">Bola Dunia Warna Biru</span>, Melambangkan UMKM Indonesia memiliki tujuan untuk Go Internasional dengan melakukan kegiatan ekspor hasil produksi dalam negeri.</li>
                    <li>
                        <span class="fw-bold">Lingkaran Bentuk Orang Bergandengan Mengelilingi Bola Bunia</span>, Melambangkan bahwa pelaku dan atau penggiat UMKM Indonesia bergotong royong saling mendukung dan bersinergi untuk tujuan ekspor hasil produksi dalam negeri.
                    </li>
                    <li>
                        <span class="fw-bold">Warna-warni Lingkaran Bentuk Orang Mengelilingi Bola Dunia</span>, melambangkan bahwa pelaku/penggiat UMKM Indonesia terdiri dari berbagai bidang hasil produksi seperti nelayan, petani, perkebunan, pengrajin, petambak, dan lain sebagainya dan dari berbagai suku bangsa di Indonesia yang ber-Bhineka Tunggal Ika. 
                    </li>
                    <li>
                        <span class="fw-bold">Dua Telapak Tangan Berdampingan</span>, Melambangkan bahwa KOPITU merupakan suatu wadah bagi pelaku/penggiat UMKM yang akan memberikan dukungan dan bimbingan dalam kegiatan lokal maupun ekspor dengan sepenuh hati dan sekuat tenaga.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-lg-7 order-2 order-lg-1">
                <h1 class="fw-bold">FILOSOFI SEGITIGA KOPITU</h1>
                <ul>
                    <li>
                        <span class="fw-bold">Segitiga Sama Sisi</span>, Sebagai integritas yang saling mendukung, menopang dan melengkapi.
                    </li>
                    <li>
                        <span class="fw-bold">KOPITU disisi Bawah Segitiga</span>, Sebagai pondasi naungan untuk para UMKM yang bersifat nirlaba, independen dan tidak beraliansi dengan partai.
                    </li>
                    <li>
                        <span class="fw-bold">Koperasi UKM Sukses Bersama dan PT UKM Sukses Bersama disebelah kanan dan kiri segitiga</span>, Merupakan Wujud hasil dari kemitraan dengan mitra strategis yang di implementasikan melalui Koperasi dan PT yang sudah bermitra dengan KOPITU.
                    </li>
                    <li>
                        <span class="fw-bold">Ketiganya Membentuk Segitiga Sama Sisi</span>, Menaungi program kerja KOPITU yang akan terus berkembang seiring berjalannya waktu.
                    </li>
                </ul>
            </div>
            <div class="col-10 col-md-8 col-lg-5 order-1 order-lg-2">
                <img src="{{ url('/images/elements/about-segitiga.png') }}" alt="about-kopitu" class="img-fluid">
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')

@endsection