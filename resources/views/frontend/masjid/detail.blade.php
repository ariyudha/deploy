@extends('layouts.app')
@section('title', 'Detail Masjid')
@section('css')

@endsection

@section('header')
<div class="page-title page-title-small">
    <h2><a href="{{ route('masjid.index') }}" data-back-button><i class="fa fa-arrow-left"></i></a>Detail Masjid</h2>
    <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="images/avatars/5s.png"></a>
</div>
<div class="card header-card shape-rounded" data-card-height="150">
    <div class="card-overlay bg-highlight opacity-95"></div>
    <div class="card-overlay dark-mode-tint"></div>
    <div class="card-bg preload-img" data-src="images/pictures/20s.jpg"></div>
</div>
@endsection

@section('content')
<img data-src="images/pictures/18w.jpg" class="preload-img img-fluid bottom-20">
<div class="content mb-0">
    <div class="float-left">
        <h1 class="mb-0">Masjid Al Muhtadin</h1>
        <p class="font-10"><i class="fa fa-map-marker-alt mr-2"></i>Jl. Daya Nasional</p>
    </div>
    <!-- <a href="#" class="float-right btn btn-xs bg-highlight rounded-xl shadow-xl text-uppercase font-900 mt-2 font-11">View on Map</a> -->
    
    <div class="clearfix"></div>                
    <div class="divider mt-2 mb-3"></div>
    
    <div class="row">
        <div class="col-4">
            <strong class="color-theme">Berdiri:</strong>
            <p class="font-12"><i class="far fa-calendar mr-2"></i> dd/mm/yy</p>
        </div>
        <div class="col-4">
            <strong class="color-theme">Luas:</strong>
            <p class="font-12"><i class="far fa-clock mr-2"></i>.. M2</p>
        </div>
        <div class="col-4">
            <strong class="color-theme">Kapasitas</strong>
            <p class="font-12"><i class="fa fa-dollar-sign mr-2"></i>200 Orang</p>
        </div>
    </div>
    
    
    <h5>Description</h5>
    <p>
        Are you a fan of paintball? Then this is the even for you! Join today and you get free gear for the duration of the event. 
        Protection required for all visitors that plan on walking the course.
    </p>
    
    <div class="list-group list-custom-large mb-4">
        <a href="#">
            <i class="far fa-calendar color-blue2-dark"></i>
            <span>Tipoligi Masjid</span>
            <!-- <strong>Masjid Raya</strong> -->
            <span class="badge bg-blue2-dark">Masjid Raya</span>
            <i class="fa fa-angle-right"></i>
        </a>
    </div>

</div>

<div class="content mb-2">
<h5 class="float-left font-16 font-500">Kegiatan Masjid</h5>
<!-- <a class="float-right font-12 color-highlight mt-n1" href="#">View All</a> -->
<div class="clearfix"></div>
</div>

<div data-card-height="140" class="card card-style rounded-m shadow-xl bg-18">
<div class="card-top mt-4 ml-3">
    <h2 class="color-white">Tema Kajian</h2>
    <p class="color-white font-10 opacity-70 mt-2 mb-n1"><i class="far fa-calendar"></i> Augustus 20 <i class="ml-3 far fa-clock"></i> 18:30 PM</p>
    <p class="color-white font-10 opacity-70"><i class="fa fa-map-marker-alt"></i>Masjid Al Muhtadin</p>
</div>
<div class="card-center mr-3">
    <a href="#" class="float-right bg-highlight btn btn-xs text-uppercase font-900 rounded-xl font-11">Join</a>
</div>
<div class="card-overlay bg-black opacity-80"></div>
</div>


<div class="card card-style pb-3">
<div class="content">
    <h3 class="font-700">Fasilitas</h3>
    <p>
    </p>
</div>
<div class="accordion mb-2" id="accordion-3">
    <div data-card-height="90" class="card card-style bg-25 mb-0 rounded-s">
        <div class="card-center">
            <button class="btn accordion-btn border-0" data-toggle="collapse" data-target="#collapse7">
                <h4 class="text-center color-white text-uppercase">Ruang Baca</h4>
                <p class="text-center color-white opacity-70 mb-0 mt-n2">You can use captions for Accordions</p>
            </button>
        </div>
        <div class="card-overlay bg-black opacity-70"></div>
    </div>
    <div id="collapse7" class="collapse" data-parent="#accordion-3">
        <div class="pt-3 pb-3 pl-4 pr-4">
            This is the accordion content. You can add any content you want to it. Really, anything! Add images, text, lists, captions or any element you want.
        </div>
    </div>

    <div data-card-height="90" class="card card-style bg-28 mb-0 mt-2 rounded-s">
        <div class="card-center">
            <button class="btn accordion-btn border-0" data-toggle="collapse" data-target="#collapse8">
                <h4 class="text-center color-white text-uppercase">Lahan Parkir</h4>
                <p class="text-center color-white opacity-70 mb-0 mt-n2">You can use different Sizes</p>
            </button>
        </div>
        <div class="card-overlay bg-black opacity-70"></div>
    </div>
    <div id="collapse8" class="collapse" data-parent="#accordion-3">
        <div class="pt-3 pb-3 pl-4 pr-4">
            This is the accordion content. You can add any content you want to it. Really, anything! Add images, text, lists, captions or any element you want.
        </div>
    </div>

    <div data-card-height="90" class="card card-style bg-27 mb-0 mt-2 rounded-s">
        <div class="card-center">
            <button class="btn accordion-btn border-0" data-toggle="collapse" data-target="#collapse10">
                <h4 class="text-center color-white text-uppercase">Loket Penitipan Barang</h4>
                <p class="text-center color-white opacity-70 mb-0 mt-n2">You can use different Sizes</p>
            </button>
        </div>
        <div class="card-overlay bg-black opacity-70"></div>
    </div>
    <div id="collapse10" class="collapse" data-parent="#accordion-3">
        <div class="pt-3 pb-3 pl-4 pr-4">
            This is the accordion content. You can add any content you want to it. Really, anything! Add images, text, lists, captions or any element you want.
        </div>
    </div>
</div>
</div>


<div class="card card-style">
    <div class="content">
        <h3>Struktur Kepengurusan</h3>

        <div class="user-slider owl-carousel">
            <div class="user-left">
                <div class="d-flex">
                    <div><img src="images/avatars/7s.png" class="bg-red2-dark mr-3 rounded-circle shadow-l" width="50"></div>
                    <div>
                        <h5 class="mt-1 mb-0">Vincent Mobi</h5>
                        <p class="font-10 mt-n1 color-gray2-dark">Back End Developer</p>
                    </div>
                    <div class="ml-auto"><span class="next-slide-user badge bg-blue2-dark mt-2 p-2 font-8">TAP FOR MORE</span></div>
                </div>
            </div>
            <div class="user-right">
                <div class="d-flex">
                    <div>
                        <h5 class="mt-1 mb-0">Vincent Mobi</h5>
                        <p class="font-10 mt-n1 color-gray2-dark">Back End Developer</p>
                    </div>
                    <div class="ml-auto">
                        <a href="#" class="icon icon-xs rounded-circle shadow-l bg-phone"><i class="fa fa-phone"></i></a>
                        <a href="#" class="icon icon-xs rounded-circle shadow-l bg-facebook mr-2 ml-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="icon icon-xs rounded-circle shadow-l bg-twitter"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider mt-4 mb-0"></div>

        <div class="d-flex">
            <div class="w-35 border-right pr-3 border-highlight">
                <img src="images/empty.png" data-src="images/avatars/1s.png" width="80" class="bg-highlight rounded-circle preload-img">
                <h6 class="font-14 font-600 mt-2 text-center">Johnatan D</h6>
                <p class="color-blue2-dark mt-n3 font-9 font-400 text-center mb-0 pt-1">Group Manager</p>
            </div>
            <div class="w-65 pl-3 pt-2">
                <h5>Support Staff Team</h5>
                <p class="color-highlight mt-n3 font-10 pt-1 mb-3">Monday to Friday - 09:00AM - 05:00 PM</p>
                <a href="#"><img src="images/empty.png" data-src="images/avatars/1s.png" width="40" class="rounded-circle preload-img"></a>
                <a href="#"><img src="images/empty.png" data-src="images/avatars/2s.png" width="40" class="rounded-circle preload-img"></a>
                <a href="#"><img src="images/empty.png" data-src="images/avatars/3s.png" width="40" class="rounded-circle preload-img"></a>
                <a href="#"><img src="images/empty.png" data-src="images/avatars/4s.png" width="40" class="rounded-circle preload-img"></a>
            </div>
        </div>

        <div class="divider mt-4"></div>

        <div class="d-flex">
            <div class="w-35 border-right pr-3 border-green1-dark">
                <img src="images/empty.png" data-src="images/avatars/2s.png" width="80" class="bg-green1-dark rounded-circle preload-img">
                <h6 class="font-14 font-600 mt-2 text-center">Johnatan D</h6>
                <p class="color-green1-dark mt-n3 font-9 font-400 text-center mb-0 pt-1">Group Manager</p>
            </div>
            <div class="w-65 pl-3 pt-2">
                <h5>Design & Development</h5>
                <p class="color-green1-dark mt-n3 font-10 pt-1 mb-3">Monday to Friday - 09:00AM - 05:00 PM</p>
                <a href="#"><img src="images/empty.png" data-src="images/avatars/4s.png" width="40" class="rounded-circle preload-img"></a>
                <a href="#"><img src="images/empty.png" data-src="images/avatars/5s.png" width="40" class="rounded-circle preload-img"></a>
                <a href="#"><img src="images/empty.png" data-src="images/avatars/6s.png" width="40" class="rounded-circle preload-img"></a>
                <a href="#"><img src="images/empty.png" data-src="images/avatars/7s.png" width="40" class="rounded-circle preload-img"></a>
            </div>
        </div>          

        <div class="divider mt-4"></div>

        <div class="d-flex">
            <div class="w-35 border-right pr-3 border-red2-dark">
                <img src="images/empty.png" data-src="images/avatars/4s.png" width="80" class="bg-yellow1-dark rounded-circle preload-img">
                <h6 class="font-14 font-600 mt-2 text-center">Johnatan D</h6>
                <p class="color-red2-dark mt-n3 font-9 font-400 text-center mb-0 pt-1">Group Manager</p>
            </div>
            <div class="w-65 pl-3 pt-2">
                <h5>Account & Billing</h5>
                <p class="color-red2-dark mt-n3 font-10 pt-1 mb-3">Monday to Friday - 09:00AM - 05:00 PM</p>
                <a href="#"><img src="images/empty.png" data-src="images/avatars/8s.png" width="40" class="rounded-circle preload-img"></a>
                <a href="#"><img src="images/empty.png" data-src="images/avatars/9s.png" width="40" class="rounded-circle preload-img"></a>
                <a href="#"><img src="images/empty.png" data-src="images/avatars/10s.png" width="40" class="rounded-circle preload-img"></a>
                <a href="#"><img src="images/empty.png" data-src="images/avatars/11s.png" width="40" class="rounded-circle preload-img"></a>
            </div>
        </div>
    </div>
</div>


@endsection

@section('js')

@endsection