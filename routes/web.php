<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\AssetSeriController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SubLokasiController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\InformasiSeriController;
use App\Http\Controllers\PembaharuanController;
use App\Http\Controllers\PemindahanController;
use App\Http\Controllers\PemusnahanController;
use App\Http\Controllers\PerbaikanController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SumberDanaController;
use App\Http\Controllers\SubLokasiDuaController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {

    if (Auth::user() != NULL) {
        # code...
        return view('home');
    } else {
        # code...
        return view('auth.login');
    }
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::name('referensi')->middleware('auth')->group(function() {
    Route::resource('/sumberdana', SumberDanaController::class);
    Route::resource('/lokasi', LokasiController::class);
    Route::resource('/lokasi/{id}/sublokasi', SubLokasiController::class);
    Route::resource('/lokasi/{id}/sublokasi/{sublokasi}/sublokasidua', SubLokasiDuaController::class);
    Route::resource('/departemen', DepartemenController::class);
});

Route::name('asset')->middleware('auth')->group(function() {
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/asset', AssetController::class);
    Route::get('/ajax/kategori/search', [AssetController::class, 'ajaxsearch']);
    Route::resource('/asset/{id}/assetseri', AssetSeriController::class);
    Route::get('/ajax/lokasi/search', [AssetSeriController::class, 'ajaxsearch']);

    // Pembaharuan Asset
    Route::get('/pembaharuan', [PembaharuanController::class, 'index'])->name('pembaharuanindex');
    Route::get('/pembaharuan/{id}', [PembaharuanController::class, 'edit'])->name('pembaharuanedit');
    Route::put('/pembaharuan/{id}', [PembaharuanController::class,'update'])->name('pembaharuanupdate');

    // Pemindahan Asset
    Route::get('/pemindahan', [PemindahanController::class, 'index'])->name('pemindahan.index');
    Route::get('/pemindahan/{id}', [PemindahanController::class, 'edit'])->name('pemindahan.edit');
    Route::put('/pemindahan/{id}', [PemindahanController::class, 'update'])->name('pemindahan.update');

    // Perbaikan Asset
    Route::get('/perbaikan', [PerbaikanController::class, 'index'])->name('perbaikan.index');
    Route::get('/perbaikan/{id}', [PerbaikanController::class, 'edit'])->name('perbaikan.edit');
    Route::put('/perbaikan/{id}', [PerbaikanController::class, 'update'])->name('perbaikan.update');

    // Pemusnahan Asset
    Route::get('/pemusnahan', [PemusnahanController::class, 'trash'])->name('pemusnahan.index');
    Route::post('/pemusnahan/{id}', [PemusnahanController::class, 'restore'])->name('pemusnahan.restore');

    // Riwayat Asset
    Route::get('/assetseri', [RiwayatController::class, 'index'])->name('riwayat.index');
    Route::get('/assetseri/{id}/riwayat', [RiwayatController::class, 'show'])->name('riwayat.show');

    // Informasi Nomor Seri
    Route::get('/informasiseri', [InformasiSeriController::class, 'index'])->name('informasiseri.index');
});