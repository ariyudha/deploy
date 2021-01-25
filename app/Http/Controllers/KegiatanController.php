<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DataTables;

class KegiatanController extends Controller
{
    public function index()
    {
        return view('backend.kegiatan.index');
    }

    public function data()
    {
        $level = Auth::user()->level['level'];
        if ($level === 'admin') {
            $data = Kegiatan::all();
        } else {
            $masjid = Auth::user()->masjid['id'];
            $data = Kegiatan::where('masjid_id', $masjid);
        }
        return Datatables::of($data)
            ->addColumn('aksi', function($data) {
                return '
                <button data-menu="edit" onclick="editData('.$data->id.')" class="btn btn-xxs mb-3 rounded-xs text-uppercase font-900 shadow-s bg-blue2-dark" data-id="'.$data->id.'"><i class="fas fa-edit"></i></button>
                <button data-menu="lihat" onclick="lihatData('.$data->id.')" class="btn btn-xxs mb-3 rounded-xs text-uppercase font-900 shadow-s bg-green2-dark" data-id="'.$data->id.'"><i class="fas fa-eye"></i></button>
                <button data-menu="hapus" onclick="hapusData('.$data->id.')" class="btn btn-xxs mb-3 rounded-xs text-uppercase font-900 shadow-s bg-red1-light" data-id="'.$data->id.'"><i class="fas fa-trash"></i></button>
                ';
            })
            ->addIndexColumn()
            ->rawColumns(['level', 'aksi'])
            ->make(true);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['pengguna_id'] = Auth::user()->id;
        $data['masjid_id'] = Auth::user()->masjid['id'];
    	$data = Kegiatan::create($json);
        return redirect()->back();
    }

    public function show($id)
    {
    	return $data = Kegiatan::where('id', $id)->first();
    }

    public function update(Request $request)
    {
    	$data = $request->all();
        $data['pengguna_id'] = Auth::user()->id;
        $data['masjid_id'] = Auth::user()->masjid['id'];
    	$data = Kegiatan::find($json['id'])->update($json);
        return redirect()->back();
    }

    public function destroy($id)
    {
    	$data = Kegiatan::find($id)->delete();
    	return redirect()->back();
    }
}
