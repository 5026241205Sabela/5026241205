<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\PegawaiDBController ;
use App\Http\Controllers\NilaiKuliahController ;

Route::get('/pegawai/',[PegawaiDBController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('halo', function () {
	return "<h1>Halo, Selamat datang </h1> di tutorial laravel <i>www.malasngoding.com</i>";
});
Route::get('blog', function () {
	return view('blog');
});
Route::get('pert5', function () {
	return view('pertemuan5');
});
Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('index', function () {
	return view('index');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('nrp', function () {
	return view('5026241205');
});

Route::get('contribution', function () {
	return view('contribution');
});

Route::get('intro', function () {
	return view('intro');
});

Route::get('news', function () {
	return view('news');
});

Route::get('berita', function () {
	return view('news1');
});

Route::get('template', function () {
	return view('responsivetemmplate');
});
Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);


Route::get('/nilaikuliah', [NilaiKuliahController::class, 'index']);
Route::get('/tambahnilai', [NilaiKuliahController::class, 'tambah']);
Route::post('/nilaistore', [NilaiKuliahController::class, 'store']);
