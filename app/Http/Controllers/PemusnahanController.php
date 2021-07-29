<?php

namespace App\Http\Controllers;

use App\Models\AssetSeri;
use Illuminate\Http\Request;
use App\Models\AssetSeriHistory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class PemusnahanController extends Controller
{
    //
    public function trash()
    {
        $datas = AssetSeri::orderBy('deleted_at', 'desc')->onlyTrashed()->get();
        return view('backend.pemusnahan.index', ['datas' => $datas]);
    }

    public function restore($id)
    {
        $datas = AssetSeri::withTrashed()->findOrFail($id);

        if($datas->trashed()){
            $datas->restore();
            // log restore asset seri
            $log = new AssetSeriHistory;
            $log->asset_seris_id = $datas->id;
            $log->users_id = Auth::user()->id;
            $log->method = 'Restore Data';
            $log->save();
            
            Toastr::success('Restore Asset Seri Sukses', 'Success');
            return redirect()->route('assetpemusnahan.index');
        }else{
            Toastr::error('Asset Seri Tidak Ada', 'Success');
            return redirect()->route('assetpemusnahan.index');
        }
    }
}
