@extends('layouts.app')
@section('title', 'Data Masjid')
@section('navbar')
<div class="header header-fixed header-auto-show header-logo-app">
    <a href="#" data-back-button class="header-title header-subtitle">Tentang Masjid</a>
    <a href="#" data-back-button class="header-icon header-icon-1"><i class="fas fa-arrow-left"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
</div>
@endsection
@section('header')
<div class="page-title page-title-small">
    <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Tentang Masjid</h2>
</div>
@endsection
@section('content')
<img data-src="{{ asset('azure/code/images/pictures/28w.jpg') }}" class="preload-img img-fluid bottom-20">
<div class="content mb-0">
    <h1>{{ $data->nama_masjid }}</h1>
    <div class="list-group list-custom-large mb-4">
        <a href="#">
            <i class="far fa-building color-blue2-dark"></i>
            <span>Topologi</span>
            <strong>{{ $data->tipologi_masjid }}</strong>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="#">
        	<i class="far fa-calendar color-blue2-dark"></i>
            <span>Tempat & Tanggal Berdiri</span>
            <strong>{{ $data->kecamatan }} - {{ Carbon\Carbon::parse($data->tanggal_tahun_berdiri)->translatedFormat('d F Y') }}</strong>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="#">
        	<i class="fa fa-map-marker-alt color-blue2-dark"></i>
            <span>Alamat</span>
            <strong>{{ $data->alamat_masjid }}</strong>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="#">
        	<i class="fa fa-circle-notch color-blue2-dark"></i>
            <span>Status Tanah</span>
            <strong>{{ $data->status_tanah }}</strong>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="#">
            <i class="fa fa-warehouse color-blue2-dark"></i>
            <span>Luas lahan dan Bangunan</span>
            <strong>Luas Tanah - {{ $data->luas_tanah }}, Luas Bangunan - {{ $data->luas_bangunan }} m2</strong>
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
    
    <h4>Deskripsi Masjid</h4>
    <p class="mb-4">
    	{{ $data->deskripsi_masjid }}
    </p>
</div>
@endsection