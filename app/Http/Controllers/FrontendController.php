<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Kegiatan;
use App\Models\Masjid;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {
    	$masjid = Masjid::first();
    	$fasilitas = Fasilitas::where('masjid_id', '=', 3)->take(3)->get();
    	$kegiatan = Kegiatan::where('masjid_id', '=', 3)->take(3)->get();

    	return view('frontend.index', compact('masjid', 'fasilitas', 'kegiatan'));
    }

    public function kegiatan()
    {
    	$kegiatan = Kegiatan::where('masjid_id', '=', 3)->get();
		return view('frontend.kegiatan.index', compact('kegiatan'));

    }

    public function kegiatanShow($id)
    {
    	$data = Kegiatan::where('id', $id)->where('masjid_id', 3)->first();
        return view('frontend.kegiatan.detail', compact('data')); 
    }

     public function fasilitas()
    {
    	$fasilitas = Fasilitas::where('masjid_id', '=', 3)->get();
		return view('frontend.fasilitas.index', compact('fasilitas'));
    }

    public function fasilitasShow($id)
    {
        $data = Fasilitas::where('id', $id)->where('masjid_id', 3)->first();
        return view('frontend.fasilitas.detail', compact('data')); 
    }
}
