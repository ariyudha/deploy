<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Masjid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DataTables;

class MasjidController extends Controller
{
    public function index()
    {
        return view('backend.masjid.index');
    }

    public function data()
    {
        $level = Auth::user()->level['level'];
        if ($level === 'admin') {
            $data = Masjid::all();
        } else {
            $masjid = Auth::user()->masjid['id'];
            $data = Masjid::where('id', $masjid);
        }
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

	public function store(Request $request)
    {
        $data = $request->all();
    	$data = Masjid::create($data);
        return redirect()->back();
    }

    public function show($id)
    {
    	return $data = Masjid::where('id', $id)->first();
    }

    public function update(Request $request)
    {
        $data = $request->all();
    	$data = Masjid::find($request->id)->update($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
    	$data = Masjid::find($id)->delete();
        return redirect()->back();
    }
}
