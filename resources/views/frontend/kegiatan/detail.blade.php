@extends('frontend.layouts.app')
@section('title', 'Detail Masjid')
@section('css')

@endsection

@section('header')
<div class="header header-fixed header-auto-show header-logo-app">
    <a href="#" data-back-button class="header-title header-subtitle"></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
</div>
@endsection

@section('content')
  <div class="page-title page-title-small">
        <h2><a href="{{ route('frontend.kegiatan') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Detail Kegiatan</h2>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
    </div>


    <div class="card card-style">
        <img data-src="" class="preload-img img-fluid bottom-20">
        <div class="content mb-0">
            <div class="float-left">
                <h1 class="mb-0">{{ $data->nama_kegiatan }}</h1>
                <p class="font-10"><i class="fa fa-map-marker-alt mr-2"></i>Masjid Al-Muhtadin UNTAN</p>
            </div>
            
            <div class="clearfix"></div>                
            <div class="divider mt-2 mb-3"></div>
            
            <div class="row">
                <div class="col-6">
                    <strong class="color-theme">Tanggal:</strong>
                    <p class="font-12"><i class="far fa-calendar mr-2"></i>{{ Carbon\Carbon::parse($data->tanggal_waktu_kegiatan)->translatedFormat('d F Y') }}</p>
                </div>
                <div class="col-6">
                    <strong class="color-theme">Time:</strong>
                    <p class="font-12"><i class="far fa-clock mr-2"></i>{{ Carbon\Carbon::parse($data->tanggal_waktu_kegiatan)->translatedFormat('H:i') }}</p>
                </div>
            </div>
            
            
            <h5>Deskripsi Kegiatan</h5>
            <p style="text-align: justify;">
                {{ $data->deskripsi_kegiatan }}
            </p>
            <div></div>
        </div>
    </div>
@endsection

@section('js')

@endsection