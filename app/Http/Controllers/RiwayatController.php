<?php

namespace App\Http\Controllers;

use App\Models\AssetSeri;
use App\Models\AssetSeriHistory;
use App\Models\SubLokasiDua;
use Illuminate\Http\Request;

class RiwayatController extends Controller
{
    //
    public function index()
    {
        $datas = AssetSeri::orderBy('created_at', 'desc')->withTrashed()->get();
        return view('backend.riwayat.index', ['datas' => $datas]);
    }

    public function show($id)
    {
        $assetseri = AssetSeri::findOrFail($id);
        $history = AssetSeriHistory::where('asset_seris_id', $id)->get();
        return view('backend.riwayat.show', ['histories' => $history, 'assetseri' => $assetseri]);
    }
}
