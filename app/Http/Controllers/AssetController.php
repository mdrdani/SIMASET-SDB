<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Categories;
use App\Models\AssetHistory;
use Illuminate\Http\Request;
use App\Http\Requests\AssetRequest;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Asset::orderBy("created_at", "desc")->get();
        return view('backend.asset.index', ['datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Categories::all();
        return view('backend.asset.add', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AssetRequest $request)
    {
        //
        $data = new Asset;

       $foto = $request->file('foto');
       if($foto)
       {
           $fotos = time() . "_" . $foto->getClientOriginalName();
           $to_folder = 'storage/foto_asset';
           $foto->move($to_folder, $fotos);
           $data->foto = $fotos;
       }

       $data->id = $request->id;
       $data->categories_id = $request->categories_id;
       $data->kode =$request->kode;
       $data->name = $request->name;
       $data->ukuran = $request->ukuran;
       $data->save();

        // Log Simpan Asset
        $log = New AssetHistory;
        $log->assets_id = $data->id;
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
    public function show($id)
    {
        //
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
        $categories = Categories::all();
        $data = Asset::findOrFail($id);
        return view('backend.asset.edit', ['data' => $data, 'categories' => $categories]);
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
        $data = Asset::findOrFail($id);

       $foto = $request->file('foto');

       if($foto)
       {
           if($data->foto && file_exists(public_path('storage/foto_asset/'. $data->foto))){
               Storage::delete(public_path('storage/foto_asset/' . $data->foto));
           }
           $fotos = time() . "_" . $foto->getClientOriginalName();
           $to_folder = 'storage/foto_asset';
           $foto->move($to_folder, $fotos);
           $data->foto = $fotos;
       }

       $data->categories_id = $request->categories_id;
       $data->kode =$request->kode;
       $data->name = $request->name;
       $data->ukuran = $request->ukuran;
       $data->save();

        // Log Update Asset
        $log = New AssetHistory;
        $log->assets_id = $id;
        $log->users_id = Auth::user()->id;
        $log->method = 'Update Data';
        $log->save();

        Toastr::success('Update Data Sukses', 'Success');
        return redirect()->route('assetasset.index');
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
        $data = Asset::findOrFail($id);
        $data->delete();

        // log hapus
        $log = New AssetHistory;
        $log->assets_id = $id;
        $log->users_id = Auth::user()->id;
        $log->method = 'Delete Data';
        $log->save();

        Toastr::error('Delete Data Sukses', 'Success');
        return redirect()->route('assetasset.index');
    }

    public function ajaxsearch(Request $request)
    {
        $keyword = $request->get("q");
        $kategori = Categories::where("name", "LIKE", "%$keyword%")->get();

        return $kategori;
    }
}
