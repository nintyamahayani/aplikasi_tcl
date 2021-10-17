<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Obat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $obat = DB::table('obat')->get();
        return view('index', ['obat' => $obat]);
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('create', ['kategori' => $kategori]);
    }

    public function store(Request $request)
    {
        // DB::beginTransaction();
        // try {
        Kategori::create([
            'id' => $request->id_kategori,
            'nama' => $request->nama_kategori,

        ]);

        Obat::create([
            'id' => $request->id,
            'nama_obat' => $request->nama_obat,
            'tahun_exp' => $request->tahun_exp,
            'kategori' => $request->kategori,

        ]);

        // DB::commit();
        // } catch (\Throwable $th) {

        //rollback jika terjadi kesalahan
        // DB::rollback();
        //  }

        return redirect('/');
    }
}
