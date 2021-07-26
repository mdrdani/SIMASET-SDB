<?php

namespace App\Http\Controllers;

use App\Models\AssetSeri;
use App\Models\SubLokasiDua;
use Illuminate\Http\Request;
use App\Models\AssetSeriHistory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AssetSeriRequest;

class PemindahanController extends Controller
{
    //
    public function index()
    {
        $datas = AssetSeri::orderBy('created_at', 'desc')->get();
        return view('backend.pemindahan.index', ['datas' => $datas]);
    }

    public function edit($id)
    {
        $sublokasidua = SubLokasiDua::all();
        $assets = AssetSeri::findOrFail($id);
        return view('backend.pemindahan.edit', [
            'assets' => $assets,
            'sublokasiduas' => $sublokasidua,
        ]);
    }

    public function update(Request $request, $id)
    {
        $datas = AssetSeri::findOrFail($id);
        $datas->sub_lokasi_duas_id = $request->sub_lokasi_duas_id;
        $datas->tgl_pindah = $request->tgl_pindah;
        $datas->keterangan = $request->keterangan;
        $datas->save();

        // Log Pemindahan
        $log = new AssetSeriHistory;
        $log->asset_seris_id = $datas->id;
        $log->users_id = Auth::user()->id;
        $log->method = 'Pemindahan Asset';
        $log->sub_lokasi_duas_id = $datas->sub_lokasi_duas_id;
        $log->tgl_pindah = $datas->tgl_pindah;
        $log->keterangan = $datas->keterangan;
        $log->save();

        Toastr::success('Pemindahan Asset Seri Sukses', 'Success');
        return redirect()->route('assetpemindahan.index');
    }
}
