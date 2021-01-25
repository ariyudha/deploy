<?php

namespace App\Http\Controllers;

use App\Models\Kepengurusan;
use App\Models\Masjid;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function masjid()
    {
    	$data = Masjid::where('id', '=', 1)->first();

    	return view('frontend.tentang.masjid', compact('data'));
    }

    public function organisasi()
    {
    	$data = Kepengurusan::where('masjid_id', '=', 1)->get();

    	return view('frontend.tentang.organisasi', compact('data'));
    }
}
