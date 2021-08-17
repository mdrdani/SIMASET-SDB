<?php

namespace App\Http\Controllers;

use App\Models\AssetSeri;
use App\Models\Lokasi;
use App\Models\SubLokasiDua;
use Illuminate\Http\Request;

class LokasiAssetController extends Controller
{
    //
    public function filter(Request $request)
    {
        
        $alllok = SubLokasiDua::all();

        $status = $request->get('sub_lokasi_duas_id');

        if($status){
            $lokasi = SubLokasiDua::where('id', $status)->get();
        }else{
            $lokasi = SubLokasiDua::all();
        }

        return view('backend.lokasiasset.index', 
        [
            'lokasis' => $lokasi, 
            'allloks' => $alllok
        ]);
    }
}
