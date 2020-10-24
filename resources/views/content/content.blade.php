@extends('content.common.template')
@section('title', 'Home')
@section('content')

{{-- declare variable --}}
@php
$volly = 'https://4.bp.blogspot.com/-u_IPP1Ftt5Q/WMf6Zi95FHI/AAAAAAAAAFI/PeKMXyqOUrkix1z2QWZZdMPFW2e2JTA9wCLcB/s1600/2016-08-21-Volleyball-Men-thumbnail.jpg';
$basket = 'https://eyofbaku2019.com/images/sport%20pages/basketball.jpg';
$futsal = 'https://d10dnch8g6iuzs.cloudfront.net/picture/96420200220173453419/width/480/height/306';
$badminton = 'https://gtimg.tokyo2020.org/image/private/t_article-image-desktop/production/byaigvjg4eju6mxwmiyn';    

$pic_roy = asset('/images/voulenteer/roy.jpg');
$pic_kemal = asset('/images/voulenteer/kemal.png');
$pic_dwiyan = asset('/images/voulenteer/dwiyan.png');
$pic_sasa = asset('/images/voulenteer/sasa.png');
@endphp
<!-- Start slider area -->
@component('content.component.jumbotron_banner')
    @slot('jb_product')
        BADu
    @endslot
    @slot('jb_content')
        BADu adalah startup digital yang memberikan layanan kepada user berupa booking 
        beberapa lapangan dengan mudah, aman, dan terpercaya!
    @endslot
@endcomponent
<!-- End slider area -->
<!-- Start help us area -->
@component('content.component.provider', ['lapangan' => 3])
{{-- Futsal --}}
@slot('logo_0')
    fa fa-futbol-o
@endslot
@slot('lapangan_0')
        Lapangan Futsal
@endslot
@slot('deskripsi_0')
        Pada layanan kami, kami memiliki fitur pada user untuk dapat membooking lapangan Basket
@endslot
@slot('button_0')
    Lihat Daftar Lapangan
@endslot
{{-- Basket --}}
@slot('logo_1')
    fa fa-futbol-o
@endslot
@slot('lapangan_1')
        Lapangan Basket
@endslot
@slot('deskripsi_1')
        Pada layanan kami, kami memiliki fitur pada user untuk dapat membooking lapangan Basket
@endslot
@slot('button_1')
    Lihat Daftar Lapangan
@endslot
{{-- Volly --}}
@slot('logo_2')
    fa fa-futbol-o
@endslot
@slot('lapangan_2')
        Lapangan Volly
@endslot
@slot('deskripsi_2')
        Pada layanan kami, kami memiliki fitur pada user untuk dapat membooking lapangan Volly
@endslot
@slot('button_2')
    Lihat Daftar Lapangan
@endslot

@endcomponent
<!-- End help us area -->
<!-- Start our gallery -->
@component('content.component.gallery', ['gallery' => [$volly,$basket,$futsal,$badminton]])
    
@endcomponent
<!-- End our gallery -->
<!-- Start countdown area -->
{{-- @component('content.component.event')
    
@endcomponent --}}
<!-- End countdown area -->
<!-- Start our volunteers area -->
@component('content.component.voulenteer', ['person' => 4])
    @slot('foto_0')
    {{$pic_roy}}
    @endslot
    @slot('name_0')
    Roy Antares
    @endslot
    @slot('as_0')
     Chief Executive Officer
    @endslot

    @slot('foto_1')
    {{$pic_kemal}}
    @endslot
    @slot('name_1')
    Kemal Attar
    @endslot
    @slot('as_1')
    Product Development
    @endslot

    @slot('foto_2')
    {{$pic_dwiyan}}
    @endslot
    @slot('name_2')
    Ferdi Azis
    @endslot
    @slot('as_2')
    Chief Marketing Officer
    @endslot

    @slot('foto_3')
    {{$pic_sasa}}
    @endslot
    @slot('name_3')
    Nurul Amanda Putri
    @endslot
    @slot('as_3')
    Chief Financial Officer
    @endslot
@endcomponent
<!-- End our volunteers area -->
<!-- Start people says area -->
@component('content.component.comment')
    
@endcomponent
@endsection