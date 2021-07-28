<?php

namespace App\Http\Controllers;

use App\Models\AssetSeri;
use Illuminate\Http\Request;
use App\Models\AssetSeriHistory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class PerbaikanController extends Controller
{
    //
    public function index()
    {
         $datas = AssetSeri::orderBy('created_at', 'desc')->get();
        return view('backend.perbaikan.index', ['datas' => $datas]);
    }

    public function edit($id)
    {
        $assets = AssetSeri::findOrFail($id);
        return view('backend.perbaikan.edit', ['assets' => $assets]);
    }

    public function update(Request $request, $id)
    {
        $datas = AssetSeri::findOrFail($id);
        $datas->tgl_perbaikan = $request->tgl_perbaikan;
        $datas->keterangan =$request->keterangan;
        $datas->save();

        // Log Perbaikan
         $log = new AssetSeriHistory;
        $log->asset_seris_id = $datas->id;
        $log->users_id = Auth::user()->id;
        $log->method = 'Perbaikan Asset';
        $log->tgl_perbaikan = $datas->tgl_perbaikan;
        $log->keterangan = $datas->keterangan;
        $log->save();

         Toastr::success('Perbaikan Asset Seri Sukses', 'Success');
        return redirect()->route('assetperbaikan.index');
    }
}
