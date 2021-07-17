<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\AssetSeri;
use App\Models\SumberDana;
use App\Models\Departement;
use App\Models\SubLokasiDua;
use Illuminate\Http\Request;
use App\Models\AssetSeriHistory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AssetSeriRequest;

class AssetSeriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $assets = Asset::findOrFail($id);
        $datas = AssetSeri::where('assets_id', $id)->orderBy('created_at', 'desc')->get();
        return view('backend.assetseri.index', ['assets' => $assets, 'datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $sublokasidua = SubLokasiDua::all();
        $sumberdana = SumberDana::all();
        $departement = Departement::all();
        $assets = Asset::findOrFail($id);
        return view('backend.assetseri.add', [
            'assets' => $assets,
            'sublokasiduas' => $sublokasidua,
            'sumberdanas' => $sumberdana,
            'departements' => $departement]);
    }

    public function ajaxsearch(Request $request){
        $keyword = $request->get("q");
        $assetseri = SubLokasiDua::where("name", "LIKE", "%$keyword%")->get();

        return $assetseri;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssetSeriRequest $request)
    {
        //
        $data = new AssetSeri;
        $data->assets_id = $request->assets_id;
        $data->nomor_seri = $request->nomor_seri;
        $data->nomor_pembelian = $request->nomor_pembelian;
        $data->sub_lokasi_duas_id = $request->sub_lokasi_duas_id;
        $data->sumber_danas_id = $request->sumber_danas_id;
        $data->departements_id = $request->departements_id;
        $data->merk_judul = $request->merk_judul;
        $data->harga_beli = $request->harga_beli;
        $data->harga_sekarang = $request->harga_sekarang;
        $data->harga_minimum = $request->harga_minimum;
        $data->nilai_penyusutan = $request->nilai_penyusutan;
        $data->kondisi = $request->kondisi;
        $data->tanggal_beli = $request->tanggal_beli;
        $data->sn = $request->sn;
        $data->save();

        // log simpan asset seri
        $log = new AssetSeriHistory;
        $log->asset_seris_id = $data->id;
        $log->users_id = Auth::user()->id;
        $log->method = 'Create Data';
        $log->save();

        Toastr::success('Tambah Data Sukses', 'Success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $assetseri)
    {
        //
        $assetseri = AssetSeri::findOrFail($id);
        $assetlog = AssetSeriHistory::findOrFail($id);
        return view('backend.assetseri.show', 
        [
            "asset" => $assetseri, 
            "assetlog" => $assetlog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
