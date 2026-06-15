<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class tagihanAirController extends Controller
{
	public function index()
	{
    		// mengambil data dari table nilaikuliah
            $tagihan_air = DB::table('tagihan_air')->get(); //--> kalo ga pake paginate


    		// mengirim data pegawai ke view index
		return view('tagihanAir_index',['tagihan_air' => $tagihan_air]);

	}

    //method untuk menampilkan view form tambah nilaikuliah
    public function tambahTagihan()
    {
        return view('tambahTagihan');
    }

    //method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
		DB::table('tagihan_air')->insert([
			'NoMeteran' => $request->NoMeteran,
			'MeterAwal' => $request->MeterAwal,
			'MeterAkhir' => $request->MeterAkhir,

		]);
        // alihkan halaman ke halaman nilaikuliah
		return redirect()->route('eas')->with('success', 'Data siswa berhasil ditambahkan.');
    }

}
