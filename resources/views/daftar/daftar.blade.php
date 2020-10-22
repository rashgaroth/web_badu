@extends('daftar.common.daftar_template')
@section('title','Daftar')
@section('daftar')
    @component('daftar.component.welcome_banner')
        @slot('jb_product')
            DAFTAR SEKARANG
        @endslot
        @slot('jb_content')
            Daftarkan identitas anda pada layanan kami 
        @endslot
    @endcomponent
    @component('daftar.component.form')
        
    @endcomponent
@endsection