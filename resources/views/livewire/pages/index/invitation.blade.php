<div>
    <div class="overflow-hidden py-5">
        <div class="container pt-5">
            <div class="d-block mb-5 pb-5">
                <div class="invitation-1 opacity-0 row gy-4 align-items-center justify-content-center">
                    <div class="col-12 col-lg-6 order-2 order-lg-1">
                        <div class="el-1 text-center text-lg-start">
                            <h2 class="mb-0">Bergabunglah Besama Kami</h2>
                            <hr class="soft mx-auto ms-lg-0" style="width: 100px;">
                            <p class="mb-4">KOPITU hadir untuk melakukan pendampingan dan bantuan kepada UMKM dan UKM untuk meningkatkan kesejahteraan dalam pasar negeri maupun ekspor dengan bentuk fasilitasi pelatihan, alih teknologi, pemasaran, bantuan hukum serta penguatan modal usaha dan pembiayaan.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-10 col-lg-6 order-1 order-lg-2">
                        <img src="{{ url('/images/vector/join2.jpg') }}" alt="Join" class="ei-1 img-fluid">
                    </div>
                </div>
            </div>
            <div class="d-block mb-5">
                <div class="invitation-2 opacity-0 row gy-4 align-items-center justify-content-center">
                    <div class="col-12 col-md-10 col-lg-6">
                        <img src="{{ url('/images/vector/akses1.jpg') }}" alt="Join" class="ei-2 img-fluid">
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="el-2 text-center text-lg-start">
                            <h2 class="mb-0">Kemudahan Dengan <br> Satu Akses</h2>
                            <hr class="soft mx-auto ms-lg-0" style="width: 100px;">
                            <p class="mb-4">Kami Memberikan Kemudahan berupa Akses di satu platform berupa kopitu preneur, pengurusan izin, bantuan pembiayaan dan bisnis inkubator.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary py-5">
        <div class="container">
            <div class="d-block rounded-3 bg-white shadow-sm py-5 px-3 text-center">
                <h3 class="text-blue-1">KAPAN LAGI GABUNG SEKARANG</h3>
                <p class="fs-5 text-blue-2">Dapatkan semua kemudahan dan jadilah bagian dari angota kami</p>
                <a href="#" class="btn btn-outline-primary btn-lg px-5">Gabung</a>
            </div>
        </div>
    </div>

    <script>
         document.addEventListener('DOMContentLoaded', function() {
        $(window).scroll(() => {
            var wScroller = $(this).scrollTop();
            if (wScroller > $('.invitation-1').offset().top - 400) {
                $('.invitation-1').removeClass('opacity-0');
                $('.el-1').addClass('animate__animated animate__fadeInLeft');
                $('.ei-1').addClass('animate__animated animate__fadeInRight');
            }
            if (wScroller > $('.invitation-2').offset().top - 400) {
                $('.invitation-2').removeClass('opacity-0');
                $('.el-2').addClass('animate__animated animate__fadeInRight');
                $('.ei-2').addClass('animate__animated animate__fadeInLeft');
            }
        });
    });
    </script>
</div>
