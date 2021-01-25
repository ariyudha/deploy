<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Level;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DataTables;

class PenggunaController extends Controller
{
    public function index()
    {
        return view('backend.pengguna.index');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $user = Pengguna::create($data);
        $level = Level::create([
        	'pengguna_id' => $user->id,
        	'nama_level' => $data['level']
        ]);
        return redirect()->back();
    }

    public function data()
    {
        $data = Pengguna::with('level')->orderBy('id', 'ASC')->get();
        return Datatables::of($data)
            ->addColumn('level', function($data) {
                return ucfirst($data['level']['nama_level']);
            })
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

    public function show($id)
    {
    	return $data = Pengguna::with('level')->where('id', $id)->first();
    }

    public function update(Request $request)
    {
        $data = $request->except(['_token', '_method', 'level']);
        if ($request->password) {
            $data['password'] = Hash::make($data['password']);
        } else {
            unset($data['password']);
        }
        $data = Pengguna::where('id', $request->id)->update($data);
        $level = Level::where('pengguna_id', $request->id)->update([
        	'nama_level' => $request->level
        ]);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $data = Pengguna::find($id)->delete();
        return redirect()->back();
    }

    public function profile()
    {
        return view('backend.pengguna.profile');
    }
}
