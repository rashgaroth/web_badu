
{!!Form::open((['url' => '/register/regist_mitra', 'class' => 'form-horizontal']))!!}
@csrf
<div class="container">
    <h3><b>Validasi Umum</b></h3>
    {!!Form::text('nama_pemilik', 'Nama Pemilik')->placeholder('M. Syarifudin')->sm()->required()!!}
    {!!Form::text('lapangan', 'Nama Lapangan/GOR')->placeholder('GOR Beji')->sm()->required()!!}
    {!!Form::text('alamat_pemilik', 'Alamat Pemilik')->placeholder('Beji, Depok')->sm()->required()!!}
    {!!Form::text('alamat_usaha', 'Alamat Usaha')->placeholder('Beji, Depok')->sm()->required()!!}
    {!!Form::text('email', 'Email Pemilik')->autocomplete('email')->placeholder('jane@gmail.com')->sm()->required()!!}
    {!!Form::text('no_hp_pemilik', 'Nomor Telepon Pemilik')->autocomplete('tel')->placeholder('087782118653')->sm()->required()!!}
    {!!Form::text('no_hp_karyawan', 'Nomor Telepon Karyawan (Opsional) ')->autocomplete('tel')->placeholder('087782118653')->sm()!!}
    <h3><b>Media Sosial (Opsional)</b></h3>
    {!!Form::text('wa_pemilik', 'Nomor Whatsapp')->placeholder('08778982711')->sm()!!}
    {!!Form::text('fb_pemilik', 'Facebook')->placeholder('Jane Doe')->sm()!!}
    {!!Form::text('ig_pemilik', 'Instagram')->placeholder('@janedoe22')->sm()!!}
    <h3><b>Transaksi</b></h3>
    {!!Form::text('no_rek', 'Nomor Rekening')->placeholder('627 38271')->sm()->required()!!}
    @php
        $bank = collect([
            1 => 'Bank Rakyat Indonesia (BRI)',
            2 => 'Bank Mandiri',
            3 => 'Bank Central Asia (BCA)',
            4 => 'Bank Negara Indonesia (BNI)',
            5 => 'Bank Tabungan Negara (BTN)',
            6 => 'Bank CIMB Niaga',
            7 => 'Bank BTPN ',
            8 => 'Panin Bank',
            9 => 'Bank OCBC NISP',
            10 => 'Bank Maybank Indonesia',
        ]);
        $fasilitas = collect([
            1 => 'Ada',
            2 => 'Tidak Ada',
        ]);
    @endphp
    {!!Form::select('nama_bank', 'Bank')->options($bank)!!}
    {{-- Gak pake form atas karena ga bisa validasi sama javascript :) --}}
    <h3><b>Data diri</b></h3>
    {{-- KTP --}}
    <h5><b>Foto KTP</b></h5>
    <input type="file" name="foto_ktp" onchange="readUrlKtp(this);">
    <br>
    <img src="" alt="" id="foto_ktp">
    <br>
    {{-- Selfie dengan KTP --}}
    <h5><b>Selfie dengan KTP</b></h5>
    <input type="file" name="foto_selfie" onchange="readUrlSelfie(this);">
    <br>
    <img src="" alt="" id="foto_selfie">
    <br>
    {{-- Foto Lapangan Usaha --}}
    <h5><b>Foto Lapangan Usaha</b></h5>
    <input type="file" name="foto_lapangan_1" onchange="readUrlLapangan1(this);">
    <img src="" alt="" id="foto_lapangan_1">
    <input type="file" name="foto_lapangan_2" onchange="readUrlLapangan2(this);">
    <img src="" alt="" id="foto_lapangan_2">
    <input type="file" name="foto_lapangan_3" onchange="readUrlLapangan3(this);">
    <img src="" alt="" id="foto_lapangan_3">
    <br>
    {{-- Foto NPWP --}}
    <h3><b>Foto NPWP (Opsional)</b></h3>
    <input type="file" name="foto_npwp" onchange="readUrlNpwp(this);">
    <br>
    <img src="" alt="" id="foto_npwp">
    <br>
    {{-- Fasilitas --}}
    <h3><b>Fasilitas Usaha</b></h3>
    {!!Form::select('kantin', 'Kantin')->options($fasilitas)!!}
    {!!Form::select('wifi', 'Wifi')->options($fasilitas)!!}
    {!!Form::select('parkiran', 'Parkiran')->options($fasilitas)!!}
    {!!Form::select('sewa_peralatan', 'Sewa Peralatan')->options($fasilitas)!!}
    {!!Form::select('toilet', 'Toilet')->options($fasilitas)!!}
    {!!Form::select('kamar_ganti', 'Kamar Ganti')->options($fasilitas)!!}
    {!!Form::select('cctv', 'CCTV')->options($fasilitas)!!}
    {{-- Submit Button --}}
    {!!Form::submit('Daftar Sekarang')->id('my-btn')->primary()->sm()!!}
    <br><br><br>
</div>
    {!!Form::close()!!}

<script type="text/javascript">
    function readUrlKtp(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#foto_ktp')
                        .attr('src', e.target.result)
                        .width(350)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    function readUrlSelfie(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#foto_selfie')
                    .attr('src', e.target.result)
                    .width(350)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readUrlLapangan1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#foto_lapangan_1')
                    .attr('src', e.target.result)
                    .width(350)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readUrlLapangan2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#foto_lapangan_2')
                    .attr('src', e.target.result)
                    .width(350)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readUrlLapangan3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#foto_lapangan_3')
                    .attr('src', e.target.result)
                    .width(350)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readUrlNpwp(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#foto_npwp')
                    .attr('src', e.target.result)
                    .width(350)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>