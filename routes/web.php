<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Auth')->group(function () {
	Route::get('/login', 'LoginController@showLoginForm');
	Route::post('login', 'LoginController@login')->name('login');
	Route::post('logout', 'LoginController@logout')->name('logout');
	Route::post('logout', 'LoginController@logout')->name('logout');
});

Route::view('menu-main', 'layouts.menu-main')->name('menu-main');
Route::view('indexes', 'frontend.indexes')->name('indexes');

Route::get('/', 'FrontendController@index')->name('frontend.index');
Route::get('/kegiatan-index', 'FrontendController@kegiatan')->name('frontend.kegiatan');
Route::get('/kegiatan-index/show/{id}', 'FrontendController@kegiatanShow')->name('frontend.kegiatanShow');
Route::get('/fasilitas-index', 'FrontendController@fasilitas')->name('frontend.fasilitas');
Route::get('/fasilitas-index/show/{id}', 'FrontendController@fasilitasShow')->name('frontend.fasilitasShow');
Route::view('/profile', 'frontend.profile.index')->name('frontend.profile');
Route::get('tentang/masjid', 'FrontController@masjid')->name('frontend.masjid');
Route::get('tentang/organisasi', 'FrontController@organisasi')->name('frontend.organisasi');


Route::middleware(['auth'])->group(function () {
	// Route::view('dashboard', 'backend.dashboard.index')->name('dashboard')->middleware('level:admin');
	Route::view('dashboard', 'backend.dashboard.index')->name('dashboard');
	
	Route::view('pengaturan', 'backend.pengaturan.index')->name('pengaturan');

	Route::get('fasilitas', 'FasilitasController@index')->name('fasilitas');
	Route::get('fasilitas/data', 'FasilitasController@data')->name('fasilitas.data');
	Route::post('fasilitas/store', 'FasilitasController@store')->name('fasilitas.store');
	Route::get('fasilitas/show/{id}', 'FasilitasController@show')->name('fasilitas.show');
	Route::put('fasilitas/update', 'FasilitasController@update')->name('fasilitas.update');
	Route::post('fasilitas/destroy/{id}', 'FasilitasController@destroy')->name('fasilitas.destroy');

	Route::get('pengguna', 'PenggunaController@index')->name('pengguna');
	Route::get('pengguna/data', 'PenggunaController@data')->name('pengguna.data');
	Route::post('pengguna/store', 'PenggunaController@store')->name('pengguna.store');
	Route::get('pengguna/show/{id}', 'PenggunaController@show')->name('pengguna.show');
	Route::put('pengguna/update', 'PenggunaController@update')->name('pengguna.update');
	Route::post('pengguna/destroy/{id}', 'PenggunaController@destroy')->name('pengguna.destroy');
	Route::get('pengguna/profil', 'PenggunaController@profile')->name('pengguna.profile');

	Route::get('keuangan', 'KeuanganController@index')->name('keuangan');
	Route::get('keuangan/data', 'KeuanganController@data')->name('keuangan.data');
	Route::post('keuangan/store', 'KeuanganController@store')->name('keuangan.store');
	Route::get('keuangan/show/{id}', 'KeuanganController@show')->name('keuangan.show');
	Route::put('keuangan/update', 'KeuanganController@update')->name('keuangan.update');
	Route::post('keuangan/destroy/{id}', 'KeuanganController@destroy')->name('keuangan.destroy');

	Route::get('masjid', 'MasjidController@index')->name('masjid')->middleware('level:admin');
	Route::get('masjid/data', 'MasjidController@data')->name('masjid.data')->middleware('level:admin');
	Route::post('masjid/store', 'MasjidController@store')->name('masjid.store')->middleware('level:admin');
	Route::get('masjid/show/{id}', 'MasjidController@show')->name('masjid.show')->middleware('level:admin');
	Route::put('masjid/update', 'MasjidController@update')->name('masjid.update')->middleware('level:admin');
	Route::post('masjid/destroy/{id}', 'MasjidController@destroy')->name('masjid.destroy')->middleware('level:admin');

	Route::get('kegiatan', 'KegiatanController@index')->name('kegiatan');
	Route::get('kegiatan/data', 'KegiatanController@data')->name('kegiatan.data');
	Route::post('kegiatan/store', 'KegiatanController@store')->name('kegiatan.store');
	Route::get('kegiatan/show/{id}', 'KegiatanController@show')->name('kegiatan.show');
	Route::put('kegiatan/update', 'KegiatanController@update')->name('kegiatan.update');
	Route::post('kegiatan/destroy/{id}', 'KegiatanController@destroy')->name('kegiatan.destroy');

	Route::get('kepengurusan', 'KepengurusanController@index')->name('kepengurusan');
	Route::get('kepengurusan/data', 'KepengurusanController@data')->name('kepengurusan.data');
	Route::post('kepengurusan/store', 'KepengurusanController@store')->name('kepengurusan.store');
	Route::get('kepengurusan/show/{id}', 'KepengurusanController@show')->name('kepengurusan.show');
	Route::put('kepengurusan/update', 'KepengurusanController@update')->name('kepengurusan.update');
	Route::post('kepengurusan/destroy/{id}', 'KepengurusanController@destroy')->name('kepengurusan.destroy');

	Route::get('inventaris', 'InventarisController@index')->name('inventaris');
	Route::get('inventaris/data', 'InventarisController@data')->name('inventaris.data');
	Route::post('inventaris/store', 'InventarisController@store')->name('inventaris.store');
	Route::get('inventaris/show/{id}', 'InventarisController@show')->name('inventaris.show');
	Route::put('inventaris/update', 'InventarisController@update')->name('inventaris.update');
	Route::post('inventaris/destroy/{id}', 'InventarisController@destroy')->name('inventaris.destroy');

	Route::get('laporan', 'LaporanController@index')->name('laporan');
	Route::get('laporan/data', 'LaporanController@data')->name('laporan.data');
	Route::get('laporan/export', 'LaporanController@export')->name('laporan.export');
});