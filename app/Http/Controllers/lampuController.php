<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class lampuController extends Controller
{
	public function index()
	{
    		// mengambil data dari table nilaikuliah
            $lampu = DB::table('lampu')->get(); //--> kalo ga pake paginate
		//$pegawai = DB::table('pegawai')->paginate(10);

    		// mengirim data pegawai ke view index
		return view('index_lampu',['lampu' => $lampu]);

	}

    //method untuk menampilkan view form tambah nilaikuliah
    public function tambah()
    {
        return view('tambahlampu');
    }

    //method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
		DB::table('lampu')->insert([
			'merklampu' => $request->merklampu,
			'stocklampu' => $request->stocklampu,
			'tersedia' => $request->tersedia,

		]);
        // alihkan halaman ke halaman nilaikuliah
		return redirect('/lampu');
    }

}
