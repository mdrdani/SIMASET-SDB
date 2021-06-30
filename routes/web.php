<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\AssetSeriController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SubLokasiController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\SumberDanaController;
use App\Http\Controllers\SubLokasiDuaController;

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
    return view('auth.login');
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
    Route::resource('/lokasi/1/sublokasi/1/sublokasidua', SubLokasiDuaController::class);
    Route::resource('/departemen', DepartemenController::class);
});

Route::name('asset')->middleware('auth')->group(function() {
    Route::resource('/kategori', KategoriController::class);
    Route::resource('/asset', AssetController::class);
    Route::resource('/asset/1/assetseri', AssetSeriController::class);
});