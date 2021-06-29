<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Illuminate\Http\Request;
use App\Http\Requests\LokasiRequest;
use Brian2694\Toastr\Facades\Toastr;

class LokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Lokasi::orderBy('created_at', 'desc')->get();
        return view('backend.lokasi.index',
        ['datas' => $datas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.lokasi.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LokasiRequest $request)
    {
        //
        $data = $request->all();

        Lokasi::create($data);

        Toastr::success('Tambah Data Sukses', 'Success');
        return redirect()->route('referensilokasi.index');
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
        $data = Lokasi::findOrFail($id);
        return view('backend.lokasi.edit',
        ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LokasiRequest $request, $id)
    {
        //
        $data = $request->all();

        $item = Lokasi::findOrFail($id);

        $item->update($data);

        Toastr::success('Update Data Sukses', 'Success');
        return redirect()->route('referensilokasi.index');

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
        $data = Lokasi::findOrFail($id);
        $data->delete();

        Toastr::error('Delete Data Sukses', 'Success');
        return redirect()->route('referensilokasi.index');
    }
}
