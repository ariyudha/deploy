@extends('layouts.app')
@section('title', 'Masjid')
@section('css')

@endsection
@section('header')
<div class="page-title page-title-small">
    <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Data Masjid</h2>
    <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="{{ asset('azure/code/images/avatars/5s.png') }}"></a>
</div>
@endsection
@section('content')
    
    <div class="content mt-0 mb-0">
        <div class="list-group list-custom-large">
            <a href="{{ route('masjid.detail') }}">
                <i class="fa fa-dollar-sign font-20 color-green1-dark"></i>
                <span>Masjid Al Muhtadin | UNTAN</span>
                <strong>Jl. Daya Nasional</strong>
                <i class="fa fa-angle-right"></i>
            </a>
            <a href="{{ route('masjid.detail') }}">
                <i class="fa fa-dollar-sign font-20 color-green1-dark"></i>
                <span>Masjid Mujahidin</span>
                <strong>Jl. Jend Ayani </strong>
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
    </div>
    

@endsection
@section('modal')

@endsection
@section('js')

@endsection