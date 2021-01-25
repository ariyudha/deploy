@extends('layouts.app')
@section('title', 'Dashboard')
@section('header')
<div class="page-title page-title-large">
    <h2 data-username="Enabled!" class="greeting-text"></h2>
    <a href="#" data-menu="menu-main" class="bg-fade-gray1-dark shadow-xl preload-img" data-src="{{ Storage::url(Auth::user()->foto) }}"></a>
</div>

<div class="content mt-n2">
    <div class="row mb-0">
        <a href="#" class="col-4">
            <div class="card card-style text-center py-3 mx-0 mb-0">
                <i class="fa fa-file font-24 color-theme opacity-30"></i>
                <p class="font-13 font-500 mb-n1 mt-2 color-theme">Laporan</p>
            </div>
        </a>
        <a href="#" class="col-4">
            <div class="card card-style text-center py-3 mx-0 mb-0">
                <i class="fa fa-clipboard font-24 color-theme opacity-30"></i>
                <p class="font-13 font-500 mb-n1 mt-2 color-theme">Master Data</p>
            </div>
        </a>
        <a href="#" class="col-4">
            <div class="card card-style text-center py-3 mx-0 mb-0">
                <i class="fa fa-users font-24 color-theme opacity-30"></i>
                <p class="font-13 font-500 mb-n1 mt-2 color-theme">Pengguna</p>
            </div>
        </a>
    </div>
</div>
<div class="divider divider-margins"></div>
@endsection
@section('dashboard')
<div class="card card-style" data-card-height="200">
    <div class="card-top pl-3 pt-3">
        <h1 class="color-white">Visa</h1>
    </div>
    <div class="card-bottom pl-3 pb-2">
        <h4 class="color-white">**** **** **** 3456</h4>
    </div>
    <div class="card-center text-center">
        <h1 class="color-white font-30">$5.135</h1>
        <p class="mb-0 color-white mt-n2 opacity-50">Available Funds</p>
    </div>
    <div class="card-top pr-3 pt-3 mt-1">
        <h5 class="color-white text-right">Jane Louder</h5>
    </div>
    <div class="card-bottom pr-3 pb-2">
        <h5 class="color-white float-right">05/24</h5>
    </div>
    <div class="card-overlay bg-gradient-blue2"></div>
    <div class="card-overlay bg-gradient-fade opacity-20"></div>
</div>

<div class="divider divider-margins"></div>

<div class="card card-style rounded-m">
    <div class="content mb-2 mt-3">
        <div class="d-flex">
            <div class="pr-4 align-self-center">
                <p class="font-600 color-highlight mb-0">Available</p>
                <h1 class="mb-2">$21,241</h1>
            </div>
            <div class="w-100 align-self-center pl-3">
                <h6 class="font-14 font-500">Income<span class="float-right color-green2-dark">+$3.115</span></h6>
                <div class="divider mb-2 mt-1"></div>
                <h6 class="font-14 font-500">Expenses<span class="float-right color-red2-dark">-$1.315</span></h6>
            </div>
        </div>      
        <div class="divider mt-2 mb-3"></div>
        <div class="row mb-0">
            <div class="col-6 pr-1">
                <div class="mx-0 mb-3">
                    <h6 class="font-13 font-400 mb-0">Income</h6>
                    <h3 class="color-green2-dark font-15 mb-0">+31.2%</h3>
                </div>
            </div>
            <div class="col-6 pl-1">
                <div class="mx-0 mb-3">
                    <h6 class="font-13 font-400 mb-0">Expenses</h6>
                    <h3 class="color-red2-dark font-15 mb-0">-14.5%</h3>
                </div>
            </div>
            <div class="col-6 pr-1">
                <div class="mx-0 mb-3">
                    <h6 class="font-13 font-400 mb-0">Subscriptions</h6>
                    <h3 class="color-brown2-dark font-15 mb-0">+11.2%</h3>
                </div>
            </div>
            <div class="col-6 pl-1">
                <div class="mx-0 mb-3">
                    <h6 class="font-13 font-400 mb-0">Savings</h6>
                    <h3 class="color-blue2-dark font-15 mb-0">$14,500</h3>
                </div>
            </div>              
        </div>
    </div>            
</div> 
@endsection