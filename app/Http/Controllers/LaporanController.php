<?php

namespace App\Http\Controllers;

use App\Exports\KeuanganExport;
use App\Models\Keuangan;
use DataTables;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function index()
    {
    	return view('backend.laporan.index');
    }

    public function data()
    {
    	$data = Keuangan::all();
    	return Datatables::of($data)
    	    ->addColumn('jenis_keuangan', function($data) {
    	    	if ($data->jenis_keuangan == 'masuk') {
	    	        return '
	    	        <a href="#" class="chip chip-small bg-gray1-dark">
	                    <i class="fa fa-check bg-green1-dark"></i>
	                    <strong class="color-black font-400">Masuk</strong>
	                </a>
	    	        ';
    	    	} else {
    	    		return '
	    	        <a href="#" class="chip chip-small bg-gray1-dark">
	                    <i class="fa fa-times bg-red1-dark"></i>
	                    <strong class="color-black font-400">Keluar</strong>
	                </a>
	    	        ';
    	    	}
    	    })
    	    ->addColumn('aksi', function($data) {
    	        return '
    	        <button data-menu="edit" onclick="editData('.$data->id.')" class="btn btn-xxs mb-3 rounded-xs text-uppercase font-900 shadow-s bg-blue2-dark" data-id="'.$data->id.'"><i class="fas fa-edit"></i></button>
    	        <button data-menu="lihat" onclick="lihatData('.$data->id.')" class="btn btn-xxs mb-3 rounded-xs text-uppercase font-900 shadow-s bg-green2-dark" data-id="'.$data->id.'"><i class="fas fa-eye"></i></button>
    	        <button data-menu="hapus" onclick="hapusData('.$data->id.')" class="btn btn-xxs mb-3 rounded-xs text-uppercase font-900 shadow-s bg-red1-light" data-id="'.$data->id.'"><i class="fas fa-trash"></i></button>
    	        ';
    	    })
    	    ->addIndexColumn()
    	    ->rawColumns(['jenis_keuangan', 'aksi'])
    	    ->make(true);
    }

    public function export()
    {
        return Excel::download(new KeuanganExport, 'keuangan.xlsx');
    }
}
