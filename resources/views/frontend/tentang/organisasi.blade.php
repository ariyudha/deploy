@extends('layouts.app')
@section('title', 'Data Organisasi')
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
    <h2><a href="#" data-back-button><i class="fa fa-arrow-left"></i></a>Tentang Organisasi</h2>
</div>
@endsection
@section('content')
<div class="content mb-2">
    <h3>Data Organisasi</h3>
    <p>
        
    </p>
    <table class="table table-borderless text-center rounded-sm shadow-l" style="overflow: hidden;">
        <thead>
            <tr class="bg-gray1-dark">
                <th scope="col" class="color-theme">Nama</th>
                <th scope="col" class="color-theme">Jabatan</th>
                <th scope="col" class="color-theme">Periode</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $key => $value): ?>
                <tr>
                    <td><p>{{ $value->nama }}</p></td>
                    <td><p>{{ $value->jabatan }}</p></td>
                    <td><p>{{ $value->periode }}</p></td>
                </tr>
            <?php endforeach ?>
            <!-- <tr>
                <th scope="row">Apple</th>
                <td class="color-green1-dark">$500</td>
                <td><i class="fa fa-arrow-up rotate-45 color-green1-dark"></i></td>
            </tr>
            <tr>
                <th scope="row">Android</th>
                <td class="color-yellow1-dark">$400</td>
                <td><i class="fa fa-arrow-right rotate-45 color-yellow1-dark"></i></td>
            </tr>
            <tr>
                <th scope="row">Nope</th>
                <td class="color-red2-dark">$300</td>
                <td><i class="fa fa-arrow-right rotate-90 color-red2-dark"></i></td>
            </tr> -->

            
        </tbody>
    </table>
</div>
@endsection