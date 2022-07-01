<!DOCTYPE html>
<html>

<head>
    <title>info@kopitudenpasar.com</title>
</head>

<body>

    <div
        style="box-sizing:border-box;margin:0;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff;width:100%!important">

        <div
            style="background-color:#1d65ff;box-sizing:border-box;width:100%;padding-right:15px;padding-left:15px;padding-top:.5rem!important;padding-bottom:.5rem!important">

            <div style="box-sizing:border-box;display:block!important">
                <h2
                    style="box-sizing:border-box;margin-top:0;margin-bottom:.5rem;line-height:1.2;font-size:2rem;page-break-after:avoid;margin:0!important;padding-top:1.5rem!important;color:#ffffff!important">
                    <span>Kopitu</span><span>Denpasar</span>
                </h2>
                <p
                    style="box-sizing:border-box;margin-top:0;margin-bottom:1rem;display:block!important;margin:0!important;color:#fff!important">
                    Selamat datang di kopitu denpasar</p>
                <hr
                    style="box-sizing:content-box;height:0;overflow:visible;margin-top:1rem;margin-bottom:.5rem!important;border:0;border-top:1px solid rgba(0,0,0,.1);background-color:#fff!important">
            </div>


            <div
                style="box-sizing:border-box;background-color:#fff!important;display:block!important;padding:1rem!important">

                <div style="box-sizing:border-box;display:block!important">
                    <p style="box-sizing:border-box;margin-top:0;margin-bottom:1rem!important;display:block!important">
                        Hallo {{ $data['username'] }},
                    </p>
                    <p style="box-sizing:border-box;margin-top:0;margin-bottom:1rem;display:block!important">
                        Terima kasih telah mendaftar keanggotaan Kopitu Denpasar. Berikut adalah
                        detail akun Anda dan kode pendaftaran anda, pastikan Anda menyimpannya dengan aman.
                    </p>
                </div>

                <div style="box-sizing:border-box;display:block!important">
                    <hr
                        style="box-sizing:content-box;height:0;overflow:visible;margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1)">
                    <div style="box-sizing:border-box;display:flex!important;margin-bottom:.5rem!important">
                        <p
                            style="box-sizing:border-box;margin-top:0;margin-bottom:1rem;display:inline-block;margin:0!important;width:120px!important">
                            Username <span style="box-sizing:border-box;float:right!important">:</span></p>
                        <span style="box-sizing:border-box;margin-left:.25rem!important">{{ $data['username'] }}</span>
                    </div>
                    <div style="box-sizing:border-box;display:flex!important;margin-bottom:.5rem!important">
                        <p
                            style="box-sizing:border-box;margin-top:0;margin-bottom:1rem;display:inline-block;margin:0!important;width:120px!important">
                            Alamat Email <span style="box-sizing:border-box;float:right!important">:</span></p>
                        <span style="box-sizing:border-box;margin-left:.25rem!important"><a
                                href="mailto:{{ $data['email'] }}" target="_blank"> {{ $data['email'] }}</a></span>
                    </div>
                    <hr
                        style="box-sizing:content-box;height:0;overflow:visible;margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1)">
                </div>
                <div style="box-sizing:border-box;display:block!important">
                    Cek secara berkala data pendaftaran anda di form pendaftaran keanggotaan kopitu denpasar
                    berikut ini merupakan kode pendaftaran data anda:
                </div>

                <div
                    style="box-sizing:border-box;display:flex!important;width: 100%;margin-top:3rem!important;margin-bottom:3rem!important;align-items:center!important">
                    <p style="border: 1rem solid #00000020; border-radius: 4px; text-align:center;">
                        {{ $data['code'] }}
                    </p>
                </div>
                <div style="box-sizing:border-box;display:block!important">
                    <p style="box-sizing:border-box;margin-top:0;margin-bottom:.5rem!important;display:block!important">
                        Kode diatas dipergunakan untuk melihat status dari pendaftaran keanggotaan yang kamu daftarakan sebelumnya. kamu bisa cek data pendaftaran keanggotaan kamu di website resmi kopitu denpasar.
                    </p>
                    <p style="box-sizing:border-box;margin-top:0;margin-bottom:1rem;display:block!important">
                        <strong style="box-sizing:border-box;font-weight:bolder">Catatan :</strong> Jika email ini masuk
                        di folder Spam, harap tandai sebagai bukan Spam dan tambahkan alamat email ini ke kontak Anda.
                    </p>
                </div>
            </div>


            <div style="box-sizing:border-box;display:block!important">
                <hr
                    style="box-sizing:content-box;height:0;overflow:visible;margin-top:.5rem!important;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1);background-color:#fff!important">
                <div
                    style="box-sizing:border-box;display:block!important;padding-top:.5rem!important;text-align:center!important;color:#fff!important">
                    <small style="box-sizing:border-box;font-size:80%;font-weight:400">Anda menerima pesan ini sebagai
                        aktivasi pendaftaran kopitu e-store.</small>
                </div>
                <div
                    style="box-sizing:border-box;display:block!important;padding-bottom:1.5rem!important;text-align:center!important;color:#fff!important">
                    <small style="box-sizing:border-box;font-size:80%;font-weight:400">
                        © 2022 <span>Kopitu e-store</span>, jakarta.
                    </small>
                </div>
            </div>


        </div>
    </div>
</body>

</html>