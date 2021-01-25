@extends('frontend.layouts.app')
@section('title', '')
@section('css')

@endsection
@section('header')
<div class="header header-fixed header-auto-show header-logo-app">
    <a href="#" data-back-button class="header-title header-subtitle">{{ $masjid->nama_masjid }}</a>
    <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-dark"><i class="fas fa-sun"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-2 show-on-theme-light"><i class="fas fa-moon"></i></a>
</div>
@endsection
@section('content')
    <div class="page-content" style="min-height:60vh!important">  
        <div class="page-title page-title-small">
            <h2></a>{{ $masjid->nama_masjid }}</h2>
        </div>
        <div class="card header-card shape-rounded" data-card-height="150">
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="azure/code/images/pictures/20s.jpg"></div>
        </div>

        <div class="single-slider slider-boxed owl-carousel owl-dots-under owl-has-controls">
            <div data-card-height="300" class="card bg-18 rounded-m shadow-l">
                <div class="card-bottom text-center mb-3">
                    <h2 class="color-white text-uppercase font-900 mb-0">Splendid Simplicity</h2>
                    <p class="under-heading color-white">A new generation of Mobile Kits.</p>
                </div>
                <div class="card-overlay bg-gradient"></div>
            </div>
            <div data-card-height="300" class="card bg-14 rounded-m shadow-l">
                <div class="card-bottom text-center mb-3">
                    <h2 class="color-white text-uppercase font-900 mb-0">Top Notch Quality</h2>
                    <p class="under-heading color-white">Flexibility, Speed, Ease of Use.</p>
                </div>
                <div class="card-overlay bg-gradient"></div>
            </div>

            <div data-card-height="300" class="card bg-14 rounded-m shadow-l">
                <div class="card-bottom text-center mb-3">
                    <h2 class="color-white text-uppercase font-900 mb-0">Perfectly Organized</h2>
                    <p class="under-heading color-white">Mobile Website, or App or PWA Ready.</p>
                </div>
                <div class="card-overlay bg-gradient"></div>
            </div>
        </div>    

        <div class="divider divider-margins mt-4"></div>

        <div class="content mb-3">
            <h5 class="float-left font-16 font-500">Kegiatan</h5>
                <a class="float-right font-12 color-highlight mt-n1" href="#" data-menu="kegiatan">Lihat Semua</a>
            <div class="clearfix"></div>
        </div>

        <?php foreach ($kegiatan as $key => $value): ?>
        <a href="#" data-card-height="240" class="card card-style rounded-m shadow-xl bg-10">
            
            <div class="card-top mt-4 pl-3 pr-4">
                <h2 class="color-white">{{ $value->nama_kegiatan }}</h2>
                <p class="color-white opacity-70">
                   {{ $value->deskripsi_kegiatan }}
                </p>
            </div>
            <div class="card-bottom ml-3">
                <p class="color-white font-10 opacity-80 mt-2 mb-n1"><i class="far fa-calendar"></i> {{ Carbon\Carbon::parse($value->tanggal_waktu_kegiatan)->translatedFormat('d F Y') }}<i class="ml-3 far fa-clock"></i>{{ Carbon\Carbon::parse($value->tanggal_waktu_kegiatan)->translatedFormat('H:i') }}</p>
                <p class="color-white font-10 opacity-80 mb-0 pb-3"><i class="fa fa-map-marker-alt"></i>{{ $masjid->alamat_masjid }}</p>
            </div>
            <div class="card-bottom pr-3 pb-3 mb-1">
                <span class="float-right bg-highlight btn btn-xs text-uppercase font-900 rounded-xl font-11">Detail</span>
            </div>
            <div class="card-overlay bg-black opacity-80"></div>
        </a>  
        <?php endforeach ?>
        
        <div class="divider divider-margins mt-4"></div>

        <div class="content mb-3">
            <h5 class="float-left font-16 font-500">Fasilitas</h5>
                <a class="float-right font-12 color-highlight mt-n1" href="#">Lihat Semua</a>
            <div class="clearfix"></div>
        </div>

        <div class="double-slider owl-carousel owl-no-dots">
            <?php foreach ($fasilitas as $key => $value): ?>
            <div class="item">
                <div data-card-height="300" class="card bg-18 rounded-m shadow-l">
                    <div class="card-bottom text-center mb-4">
                        <h2 class="color-white text-uppercase font-900">{{ $value->nama_fasilitas }}</h2>
                    </div>
                    <div class="card-overlay bg-gradient"></div>
                </div>
                <a href="#" class="under-slider-btn btn btn-s btn-center-xs text-uppercase font-900 bg-red2-dark rounded-s">Detail</a>
            </div>
            <?php endforeach ?>
        </div>

        <div class="divider divider-margins mt-4"></div>

               
        
        <!-- footer and footer card-->
        <div class="footer" data-menu-load="azure/code-rtl/menu-footer.html"></div>
        <div class="card card-style  mr-0 ml-0 rounded-0 bg-gradient-blue2">
            <div class="content pt-5 pb-5">
                <h1 class="mb-1 color-white font-700 text-center">Kontak</h1>
                <p class="boxed-text-xl color-white opacity-80">
                    <i></i>{{ $masjid->alamat_masjid }}
                </p>
                <!-- <a href="#" class="btn btn-s bg-white color-black font-900 btn-center-m">AWESOME</a> -->
            </div>            
        </div> 
    </div>    
    <!-- end of page content-->
                   

    
    <div id="menu-share" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="azure/code-rtl/menu-share.html"
         data-menu-height="420" 
         data-menu-effect="menu-over">
    </div>    
    
    <div id="menu-highlights" 
         class="menu menu-box-bottom menu-box-detached rounded-m" 
         data-menu-load="azure/code-rtl/menu-colors.html"
         data-menu-height="510" 
         data-menu-effect="menu-over">        
    </div>
    
    <div id="menu-main"
         class="menu menu-box-right menu-box-detached rounded-m"
         data-menu-width="260"
         data-menu-load="azure/code-rtl/menu-main.html"
         data-menu-active="nav-features"
         data-menu-effect="menu-over">  
    </div>


    <div id="kegiatan"
         class="menu menu-box-modal"
         data-menu-width="100%"
         data-menu-height="100%">  
        
        <div class="card" data-card-height="90">
            <div class="card-top">
                <div class="page-title page-title-small">
                    <h2><a href="#" class="close-menu"><i class="fa fa-arrow-left"></i></a> Kegiatan</h2>
                </div>
            </div>
            <div class="card-overlay bg-highlight opacity-95"></div>
            <div class="card-overlay dark-mode-tint"></div>
            <div class="card-bg preload-img" data-src="azure/code/images/pictures/20s.jpg"></div>
        </div>

        <div class="content mt-0 mb-0">
            <div class="list-group list-custom-large">
                <?php foreach ($kegiatan as $key => $value): ?>
                <a href="">
                    <i class="fa fa-dollar-sign font-20 color-green1-dark"></i>
                    <span>{{ $value->nama_kegiatan }} | {{ $value->jenis_kegiatan }}</span>
                    <strong><i class="far fa-calendar"></i> {{ Carbon\Carbon::parse($value->tanggal_waktu_kegiatan)->translatedFormat('d F Y') }} <i class="far fa-clock"></i> {{ Carbon\Carbon::parse($value->tanggal_waktu_kegiatan)->translatedFormat('H:i') }}</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
                <?php endforeach ?>
            </div>
        </div>
        
        <a href="#" class="close-menu btn btn-xl btn-full bg-highlight rounded-0 text-uppercase font-900 mb-0">Tutup</a>
        
    </div>
        
    
</div>    

@endsection

@section('js')
  
@endsection
