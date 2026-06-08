<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
	public function index()
	{
    		// mengambil data dari table nilaikuliah
            $nilaikuliah = DB::table('nilaikuliah')->get(); //--> kalo ga pake paginate
		//$pegawai = DB::table('pegawai')->paginate(10);

    		// mengirim data pegawai ke view index
		return view('indexnilai',['nilaikuliah' => $nilaikuliah]);

	}

    //method untuk menampilkan view form tambah nilaikuliah
    public function tambah()
    {
        return view('tambahnilai');
    }

    //method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'nrp' => $request->nrp,
			'nilaiAngka' => $request->nilaiAngka,
			'sks' => $request->sks,

		]);
        // alihkan halaman ke halaman nilaikuliah
		return redirect('/nilaikuliah');
    }

}
