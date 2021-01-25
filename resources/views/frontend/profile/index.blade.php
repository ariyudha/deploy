@extends('frontend.layouts.app')
@section('title', 'Pengaturan')
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
<div class="page-content" style="min-height:60vh!important">
    <div class="page-title page-title-small">
        <h2><a href="{{ route('frontend.index') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Profil Masjid</h2>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
    </div>
    <div class="card card-style">
        <div class="content mt-0 mb-2">
            <div class="list-group list-custom-large mb-4">
                <a href="#" data-toggle-theme class="show-on-theme-light">
                    <i class="fa font-14 fa-moon bg-brown1-dark rounded-sm"></i>
                    <span>Dark Mode</span>
                    <strong>Auto Dark Mode Available Too</strong>
                    <i class="fa fa-angle-right mr-2"></i>
                </a>     
                <a href="#" data-toggle-theme class="show-on-theme-dark">
                    <i class="fa font-14 fa-lightbulb bg-yellow1-dark rounded-sm"></i>
                    <span>Light Mode</span>
                    <strong>Auto Dark Mode Available Too</strong>
                    <i class="fa fa-angle-right mr-2"></i>
                </a>   
                <a href="{{ route('frontend.masjid') }}">
                    <i class="fa font-14 fa-id-card bg-highlight color-white rounded-sm"></i>
                    <span>Tentang Kami</span>
                    <strong></strong>
                    <i class="fa fa-angle-right mr-2"></i>
                </a>   
                <a href="{{ route('frontend.organisasi') }}">
                    <i class="fa font-14 fa-users-cog bg-highlight color-white rounded-sm"></i>
                    <span>Struktur Kepengurusan</span>
                    <strong></strong>
                    <i class="fa fa-angle-right mr-2"></i>
                </a>     
            </div>
        </div>
    </div>
</div>
@endsection