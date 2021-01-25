<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('layouts.css')
    @yield('css')
    <link rel="manifest" href="{{ asset('azure/code/_manifest.json') }}">
    <script type="text/javascript">
    // Initialize the service worker
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/sw.js', {
            scope: '.'
        }).then(function (registration) {
            // Registration was successful
            console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) {
            // registration failed :(
            console.log('Laravel PWA: ServiceWorker registration failed: ', err);
        });
    }
    </script>  
</head>
<body class="theme-light" data-highlight="blue2">
    
    <div id="preloader"><div class="spinner-border color-highlight" role="status"></div></div>
    
    <div id="page">
        

        @include('layouts.footer')
        
        <div class="page-content">
            @yield('header')
            
            <div class="card header-card shape-rounded" data-card-height="150">
                <div class="card-overlay bg-highlight opacity-95"></div>
                <div class="card-overlay dark-mode-tint"></div>
                <div class="card-bg preload-img" data-src="{{ asset('azure/code/images/pictures/20s.jpg') }}"></div>
            </div>

            @yield('dashboard')
            
            <div class="card card-style">
                @yield('content')          
            </div>   
        </div>

        @yield('modal')    
        
        <div id="menu-share-thumbs" class="menu menu-box-bottom menu-box-detached rounded-m" data-menu-height="420" data-menu-effect="menu-over">
            <h1 class="text-center font-700 mt-3 pt-2">Master Data</h1>
            <div class="divider divider-margins"></div>
            
            <div class="row text-center mr-4 ml-4 mb-0">
                <div class="col-4 mb-n2">
                    <a href="#" id="fasilitas-link" class="icon icon-l bg-blue2-dark rounded-s shadow-l"><i class="fas fa-warehouse font-22"></i><br></a>
                    <p class="font-11 opacity-70">Fasilitas</p>
                </div>
                <div class="col-4 mb-n2">
                    <a href="#" id="masjid-link" class="icon icon-l bg-blue2-dark rounded-s shadow-l"><i class="fas fa-mosque font-22"></i><br></a>
                    <p class="font-11 opacity-70">Masjid</p>
                </div>
                <div class="col-4 mb-n2">
                    <a href="#" id="keuangan-link" class="icon icon-l bg-blue2-dark rounded-s shadow-l"><i class="fas fa-wallet font-22"></i><br></a>
                    <p class="font-11 opacity-70">Keuangan</p>
                </div>
                <div class="col-4 mb-n2">
                    <a href="#" id="kegiatan-link" class="icon icon-l bg-blue2-dark rounded-s shadow-l"><i class="fas fa-calendar-alt font-22"></i><br></a>
                    <p class="font-11 opacity-70">Kegiatan</p>
                </div>
                <div class="col-4 mb-n2">
                    <a href="#" id="kepengurusan-link" class="icon icon-l bg-blue2-dark rounded-s shadow-l"><i class="fas fa-sitemap font-22"></i><br></a>
                    <p class="font-11 opacity-70">Kepengurusan</p>
                </div>
                <div class="col-4 mb-n2">
                    <a href="#" id="inventaris-link" class="close-menu icon icon-l bg-blue2-dark rounded-s shadow-l"><i class="fas fa-boxes font-22"></i><br></a>
                    <p class="font-11 opacity-70">Inventaris</p>
                </div>
            </div>

            <div class="divider divider-margins mt-n1 mb-3"></div>
            <p class="text-center font-10 mb-0">Copyright <span class="copyright-year"></span> - Ari Yudha Prawira. All rights reserved.</p>
        </div>

        <div id="menu-main" class="menu menu-box-right menu-box-detached rounded-m" data-menu-width="260"
             data-menu-load="{{ route('menu-main') }}" data-menu-active="nav-features" data-menu-effect="menu-over">
        </div>
    </div>
    

    @include('layouts.js')
    @yield('js')
    <script>
        $('#fasilitas-link').prop('href', '{{ route('fasilitas') }}');
        $('#masjid-link').prop('href', '{{ route('masjid') }}');
        $('#keuangan-link').prop('href', '{{ route('keuangan') }}');
        $('#kegiatan-link').prop('href', '{{ route('kegiatan') }}');
        $('#kepengurusan-link').prop('href', '{{ route('kepengurusan') }}');
        $('#inventaris-link').prop('href', '{{ route('inventaris') }}');
    </script>
</body>
