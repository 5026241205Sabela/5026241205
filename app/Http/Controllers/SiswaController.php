<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule; // tambahan untuk validasi

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = DB::table('siswa')->orderBy('NRP')->get(); // ini kalo mau di urutin by nrp
        return view('siswa.index', compact('siswa'));
        // compact ditambahkan untuk menjelaskan bedanya diurutin by nrp atau yang lainnya
        // view(siswa.index) artinya ngambil dari file index yang adaa di folder siswa yang dimana itu terdapat di folder view
    }

    public function create()
    {
        return view('siswa.create'); // ini pake titik (ga langsung ke file nya) karena di route nya pake alias
    }

    public function store(Request $request)
    {
        $request->validate([
            'NRP' => 'required|string|max:10|unique:siswa,NRP',
            'Nama' => 'required|string|max:20',
            'Kelas' => 'required|string|max:5',
            'TanggalLahir' => 'required|date',
        ]);

        //pake unique biar klo masukin data baru dengan nrp yang sama, error
        // semuanya required : wajib diiisi dengan tipe data disesuaikan dengan yang di database, dan atur maksimal panjangnya kalo mau diset minimal juga bisa

        DB::table('siswa')->insert([
            'NRP' => $request->NRP,
            'Nama' => $request->Nama,
            'Kelas' => $request->Kelas,
            'TanggalLahir' => $request->TanggalLahir,
        ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil ditambahkan.');
    }
    // jadi kalo misal success ada alert dengan pesan tersebut
    public function edit($nrp)
    {
        $siswa = DB::table('siswa')->where('NRP', $nrp)->first();

        if (!$siswa) {
            abort(404);
        }

        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $nrp)
    {
        $request->validate([
            'NRP' => [
                'required',
                'string',
                'max:10',
                Rule::unique('siswa', 'NRP')->ignore($nrp, 'NRP'),
            ],
            'Nama' => 'required|string|max:20',
            'Kelas' => 'required|string|max:5',
            'TanggalLahir' => 'required|date',
        ]);

        DB::table('siswa')
            ->where('NRP', $nrp)
            ->update([
                'NRP' => $request->NRP,
                'Nama' => $request->Nama,
                'Kelas' => $request->Kelas,
                'TanggalLahir' => $request->TanggalLahir,
            ]);

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diubah.');
    }

    public function destroy($nrp)
    {
        DB::table('siswa')->where('NRP', $nrp)->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }
}
