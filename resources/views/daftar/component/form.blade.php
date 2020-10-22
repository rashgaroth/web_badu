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
{!!Form::open((['url' => '/register/regist_mitra', 'class' => 'form-horizontal']))->put()!!}
{{ csrf_field() }}
<div class="container">
    <h3><b>Validasi Umum</b></h3>
    <div class="row">
        <div class="col-sm">
            {!!Form::text('nama_pemilik', 'Nama Pemilik')->placeholder('M. Syarifudin')->sm()->required()!!}
        </div>
        <div class="col-sm">
            {!!Form::text('lapangan', 'Nama Lapangan/GOR')->placeholder('GOR Beji')->sm()->required()!!}
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            {!!Form::text('alamat_pemilik', 'Alamat Pemilik')->placeholder('Beji, Depok')->sm()->required()!!}
        </div>
        <div class="col-sm">
            {!!Form::text('alamat_usaha', 'Alamat Usaha')->placeholder('Beji, Depok')->sm()->required()!!}
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            {!!Form::text('email', 'Email Pemilik')->autocomplete('email')->placeholder('jane@gmail.com')->sm()->required()!!}
        </div>
        <div class="col-sm">
            {!!Form::text('no_hp_pemilik', 'Nomor Telepon Pemilik')->autocomplete('tel')->placeholder('087782118653')->sm()->required()!!}
        </div>
    </div>
        <div class="row container">
        {!!Form::text('no_hp_karyawan', 'Nomor Telepon Karyawan (Opsional) ')->autocomplete('tel')->placeholder('087782118653')->sm()!!}    
        </div>
    <h3><b>Media Sosial (Opsional)</b></h3>
    <div class="row">
        <div class="col-sm">
         {!!Form::text('wa_pemilik', 'Nomor Whatsapp')->placeholder('08778982711')->sm()!!}
        </div>
        <div class="col-sm">
         {!!Form::text('fb_pemilik', 'Facebook')->placeholder('Jane Doe')->sm()!!}
        </div>
    </div>
    <div class="row container">
        {!!Form::text('ig_pemilik', 'Instagram')->placeholder('@janedoe22')->sm()!!}
    </div>
    <h3><b>Transaksi</b></h3>
    <div class="row">
        <div class="col-sm">
         {!!Form::text('no_rek', 'Nomor Rekening')->placeholder('627 38271')->sm()->required()!!}
        </div>
        <div class="col-sm">
         {!!Form::select('nama_bank', 'Bank')->options($bank)->sm()!!}
        </div>
    </div>
    {{-- Gak pake form atas karena ga bisa validasi sama javascript :) --}}
    <h3><b>Data diri</b></h3>
    {{-- KTP --}}
    <h5><b>Foto KTP</b></h5>
<div class="input-group small w-75">
    <div class="custom-file">
        <input type="file" name="foto_ktp" class="custom-file-input"  id="inputGroupFile01" onchange="readUrlKtp(this);">
        <label class="custom-file-label" for="inputGroupFile01"></label>
    </div>
</div>
    <div class="card" style="width: 18rem; margin-top: 40px; margin-bottom: 40px;">
<img class="card-img-top" src="{{asset('images/common/no-image.png')}}" alt="Card image cap" id="foto_ktp" width="286px">
  <div class="card-body">
    <p class="card-text">Preview KTP</p>
  </div>
</div>
    {{-- Selfie dengan KTP --}}
    <h5><b>Selfie dengan KTP</b></h5>
<div class="input-group mb-0 small w-75">
    <div class="custom-file">
        <input type="file" name="foto_selfie" class="custom-file-input"  id="inputGroupFile01" onchange="readUrlSelfie(this);">
        <label class="custom-file-label" for="inputGroupFile01"></label>
    </div>
</div>
    <div class="card" style="width: 18rem; margin-top: 40px; margin-bottom: 40px;">
<img class="card-img-top" src="{{asset('images/common/no-image.png')}}" alt="Card image cap" id="foto_selfie" width="286px">
  <div class="card-body">
    <p class="card-text">Preview Selfie</p>
  </div>
</div>
    {{-- Foto Lapangan Usaha --}}
    <h5><b>Foto Lapangan Usaha</b></h5>
<div class="input-group small mb-0 w-75">
    <div class="custom-file">
        <input type="file" name="foto_lapangan_1" class="custom-file-input"  id="inputGroupFile01" onchange="readUrlLapangan1(this);">
        <label class="custom-file-label" for="inputGroupFile01"></label>
    </div>
</div>
<div class="card" style="width: 18rem; margin-top: 40px; margin-bottom: 40px;">
<img class="card-img-top" src="{{asset('images/common/no-image.png')}}" alt="Card image cap" id="foto_lapangan_1" width="286px">
  <div class="card-body">
    <p class="card-text">Preview Lapangan 1</p>
  </div>
</div>
    {{--  --}}
<div class="input-group small mb-0 w-75">
    <div class="custom-file">
        <input type="file" name="foto_lapangan_2" class="custom-file-input"  id="inputGroupFile01" onchange="readUrlLapangan2(this);">
        <label class="custom-file-label" for="inputGroupFile01"></label>
    </div>
</div>
<div class="card" style="width: 18rem; margin-top: 40px; margin-bottom: 40px;">
<img class="card-img-top" src="{{asset('images/common/no-image.png')}}" alt="Card image cap" id="foto_lapangan_2" width="286px">
  <div class="card-body">
    <p class="card-text">Preview Lapangan 2</p>
  </div>
</div>
    {{--  --}}
<div class="input-group small mb-0 w-75">
    <div class="custom-file">
        <input type="file" name="foto_lapangan_3" class="custom-file-input"  id="inputGroupFile01" onchange="readUrlLapangan3(this);">
        <label class="custom-file-label" for="inputGroupFile01"></label>
    </div>
</div>
<div class="card" style="width: 18rem; margin-top: 40px; margin-bottom: 40px;">
<img class="card-img-top" src="{{asset('images/common/no-image.png')}}" alt="Card image cap" id="foto_lapangan_3" width="286px">
  <div class="card-body">
    <p class="card-text">Preview Lapangan 3</p>
  </div>
</div>
    {{-- Foto NPWP --}}
    <h3><b>Foto NPWP (Opsional)</b></h3>
<div class="input-group small mb-0 w-75">
    <div class="custom-file">
        <input type="file" name="foto_npwp" class="custom-file-input"  id="inputGroupFile01" onchange="readUrlNpwp(this);">
        <label class="custom-file-label" for="inputGroupFile01"></label>
    </div>
</div>
<div class="card" style="width: 18rem; margin-top: 40px; margin-bottom: 40px;">
<img class="card-img-top" src="{{asset('images/common/no-image.png')}}" alt="Card image cap" id="foto_npwp" width="286px">
  <div class="card-body">
    <p class="card-text">Preview NPWP</p>
  </div>
</div>
    {{-- Fasilitas --}}
    <h3><b>Fasilitas Usaha</b></h3>
    <div class="row">
        <div class="col-sm">
            {!!Form::select('kantin', 'Kantin')->options($fasilitas)->sm()!!}
        </div>
        <div class="col-sm">
            {!!Form::select('wifi', 'Wifi')->options($fasilitas)->sm()!!}
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            {!!Form::select('parkiran', 'Parkiran')->options($fasilitas)->sm()!!}
        </div>
        <div class="col-sm">
            {!!Form::select('sewa_peralatan', 'Sewa Peralatan')->options($fasilitas)->sm()!!}
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            {!!Form::select('toilet', 'Toilet')->options($fasilitas)->sm()!!}
        </div>
        <div class="col-sm">
            {!!Form::select('kamar_ganti', 'Kamar Ganti')->options($fasilitas)->sm()!!}
        </div>
    </div>
    {!!Form::select('cctv', 'CCTV')->options($fasilitas)->sm()!!}
    {{-- Submit Button --}}
    {!!Form::submit('Daftar Sekarang')->id('my-btn')->primary()->sm()!!}
    <div class="m-5">

    </div>
</div>
    {!!Form::close()!!}

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>

<script type="text/javascript">

    function readUrlKtp(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#foto_ktp')
                        .attr('src', e.target.result)
                        .width(286)
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
                    .width(286)
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
                    .width(286)
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
                    .width(286)
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
                    .width(286)
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
                    .width(286)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>