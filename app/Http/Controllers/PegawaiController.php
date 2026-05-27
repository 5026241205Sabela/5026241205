<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index()
    {
        // mengambil data dari tabel pegawai
        $pegawai = DB::table('pegawai') ->get();
        //mengirim data pegawai ke view pegawai
        return view('index',['pegawai'=> $pegawai]);
    }
}
