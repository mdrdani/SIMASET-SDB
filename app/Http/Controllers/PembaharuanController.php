<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssetRequest;
use App\Http\Requests\AssetSeriRequest;
use App\Models\AssetSeri;
use App\Models\SumberDana;
use App\Models\Departement;
use App\Models\SubLokasiDua;
use Illuminate\Http\Request;
use App\Models\AssetSeriHistory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class PembaharuanController extends Controller
{
    //
    public function index()
    {
        $datas = AssetSeri::orderBy('created_at', 'desc')->get();
        return view('backend.pembaharuan.index', ['datas' => $datas]);
    }

    public function edit($id)
    {
        $sublokasidua = SubLokasiDua::all();
        $sumberdana = SumberDana::all();
        $departement = Departement::all();
        $assets = AssetSeri::findOrFail($id);
        return view('backend.pembaharuan.edit', [
            'assets' => $assets,
            'sublokasiduas' => $sublokasidua,
            'sumberdanas' => $sumberdana,
            'departements' => $departement
        ]);
    }

    public function update(Request $request, $id)
    {
        $assets = AssetSeri::findOrFail($id);

        $assets->assets_id = $request->assets_id;
        $assets->nomor_pembelian = $request->nomor_pembelian;
        $assets->sub_lokasi_duas_id = $request->sub_lokasi_duas_id;
        $assets->sumber_danas_id = $request->sumber_danas_id;
        $assets->departements_id = $request->departements_id;
        $assets->merk_judul = $request->merk_judul;
        $assets->harga_beli = $request->harga_beli;
        $assets->harga_sekarang = $request->harga_sekarang;
        $assets->harga_minimum = $request->harga_minimum;
        $assets->nilai_penyusutan = $request->nilai_penyusutan;
        $assets->kondisi = $request->kondisi;
        $assets->tanggal_beli = $request->tanggal_beli;
        $assets->sn = $request->sn;
        $assets->save();

        // log simpan asset seri
        $log = new AssetSeriHistory;
        $log->asset_seris_id = $assets->id;
        $log->users_id = Auth::user()->id;
        $log->method = 'Pembaharuan Asset';
        $log->save();

        Toastr::success('Pembaharuan Asset Seri Sukses', 'Success');
        return redirect()->route('assetpembaharuanindex');
    }
}
