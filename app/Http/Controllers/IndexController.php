<?php

namespace App\Http\Controllers;

use App\Models\Masjid;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

    	$data = Masjid::all();
    	
    }
}
