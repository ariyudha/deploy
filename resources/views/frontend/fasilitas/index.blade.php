@extends('frontend.layouts.app')
@section('title', 'Fasilitas Masjid')
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
        <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Fasilitas Masjid</h2>
    </div>
    <div class="card header-card shape-rounded" data-card-height="150">
        <div class="card-overlay bg-highlight opacity-95"></div>
        <div class="card-overlay dark-mode-tint"></div>
        <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
    </div>

    <div class="card card-style">
       <div class="content mt-0 mb-0">
            <div class="list-group list-custom-large">
                <?php foreach ($fasilitas as $key => $value): ?>
                <a href="{{ route('frontend.fasilitasShow', $value->id) }}">
                    <i class="fa fa-dollar-sign font-20 color-green1-dark"></i>
                    <span>{{ $value->nama_fasilitas }}</span>
                    <strong></strong>
                    <i class="fa fa-angle-right"></i>
                </a>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
@endsection
@section('modal')
    <div id="lihat"
         class="menu menu-box-modal"
         data-menu-width="100%"
         data-menu-height="100%">  
        
        <div class="card" data-card-height="90">
            <div class="card-top">
                <div class="page-title page-title-small">
                    <h2><a href="#" class="close-menu"><i class="fa fa-arrow-left"></i></a> Fasilitas</h2>
                </div>
            </div>
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
        </div>

        <div class="card card-style">
            <img data-src="images/pictures/18w.jpg" class="preload-img img-fluid bottom-20">
            <div class="content mb-0">
                <div class="float-left">
                    <h1 class="mb-0" id="nama_kegiatan"></h1>
                    <p class="font-10"><i class="fa fa-map-marker-alt mr-2"></i>Masjid Al-Muhtadin UNTAN</p>
                </div>
                
                <div class="clearfix"></div>                
                <div class="divider mt-2 mb-3"></div>
                
                <div class="row">
                    <div class="col-6">
                        <strong class="color-theme">Date:</strong>
                        <p class="font-12"><i class="far fa-calendar mr-2"></i>Aug 15th</p>
                    </div>
                    <div class="col-6">
                        <strong class="color-theme">Time:</strong>
                        <p class="font-12"><i class="far fa-clock mr-2"></i>09:00 AM</p>
                    </div>
                </div>
                
                
                <h5>Description</h5>
                <p>
                    Are you a fan of paintball? Then this is the even for you! Join today and you get free gear for the duration of the event. 
                    Protection required for all visitors that plan on walking the course.
                </p>
                <div></div>
            </div>
        </div>
        
        <a href="#" class="close-menu btn btn-xl btn-full bg-highlight rounded-0 text-uppercase font-900 mb-0">Tutup</a>
        
    </div>
@endsection
@section('js')
<script>
    
</script>
@endsection