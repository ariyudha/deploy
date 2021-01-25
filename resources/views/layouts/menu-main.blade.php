<div class="menu-header">
    <a href="#" data-toggle-theme class="border-right-0"><i class="fa font-12 color-yellow1-dark fa-lightbulb"></i></a>
    <a href="{{ route('pengaturan') }}" class="border-right-0"><i class="fa font-12 color-blue2-dark fa-cog"></i></a>
    <a href="#" class="border-right-0 close-menu"><i class="fa font-12 color-red2-dark fa-times"></i></a>
</div>

<div class="menu-logo text-center">
    <a href="#"><img class="rounded-circle bg-highlight" width="80" src="{{ Storage::url(Auth::user()->foto) }}"></a>
    <h1 class="pt-3 font-800 font-12 text-uppercase">{{ Auth::user()->nama }}</h1>
    <p class="font-11 mt-n2"><span class="color-highlight">{{ strtoupper(Auth::user()->level['nama_level']) }}</span></p>
</div>

<div class="menu-items">
    <h5 class="text-uppercase opacity-20 font-12 pl-3">Menu</h5>
    <a id="nav-features" href="components.html">
        <i data-feather="user-check" data-feather-line="1" data-feather-size="16" data-feather-color="red2-dark" data-feather-bg="red2-fade-dark"></i>
        <span>Profil</span>
        <i class="fa fa-circle"></i>
    </a>
    <a id="nav-settings" href="{{ route('pengaturan') }}">
        <i data-feather="settings" data-feather-line="1" data-feather-size="16" data-feather-color="gray2-dark" data-feather-bg="gray2-fade-dark"></i>
        <span>Pengaturan</span>
        <i class="fa fa-circle"></i>
    </a>
    <a href="#">
        <i data-feather="log-out" data-feather-line="3" data-feather-size="16" data-feather-color="red2-dark" data-feather-bg="red2-fade-dark"></i>
        <span>Sign Out</span>
        <i class="fa fa-circle"></i>
    </a>
</div>

<div class="text-center pt-2">
    <p class="mb-0 pt-3 font-10 opacity-30">Copyright <span class="copyright-year"></span> Ari Yudha Prawira. All rights reserved</p>
</div>
