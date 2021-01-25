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
        <h2><a href="{{ route('frontend.fasilitas') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Detail Fasilitas</h2>
        <!-- <a href="" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a> -->
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
    </div>


    <div class="card card-style">
        <img data-src="images/pictures/18w.jpg" class="preload-img img-fluid bottom-20">
        <div class="content mb-0">
            <div class="float-left">
                <h1 class="mb-0">{{ $data->nama_fasilitas }}</h1>
                <p class="font-10"><i class="fa fa-map-marker-alt mr-2"></i>Masjid Al-Muhtadin UNTAN</p>
            </div>
            
            <div class="clearfix"></div>                
            <div class="divider mt-2 mb-3"></div>
            
            <h5>Deskripsi</h5>
            <p>
                {{ $data->deskripsi_fasilitas }}
            </p>
            <div></div>
        </div>
    </div>
@endsection

@section('js')

@endsection