<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\SubLokasi;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\SubLokasiRequest;

class SubLokasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $data = Lokasi::findOrFail($id);
        $items = SubLokasi::where('lokasis_id', $id)->orderBy("created_at", "asc")->get();
        return view('backend.sublokasi.index', ['data' => $data, 'items' => $items,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        $data = Lokasi::findOrFail($id);
        return view('backend.sublokasi.add', ['data'=> $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubLokasiRequest $request)
    {
        //
        $data = $request->all();

        SubLokasi::create($data);

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
    public function edit($id, $sublokasis)
    {
        //
        $data = Lokasi::findOrFail($id);
        $item = SubLokasi::find($sublokasis);
        // dd($item);
        return view('backend.sublokasi.edit', ['data' => $data,'item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubLokasiRequest $request, $id, $sublokasis)
    {
        //
        $data = $request->all();

        $lokasi = Lokasi::findOrFail($id);
        $item = SubLokasi::findOrFail($sublokasis);

        $item->update($data);

        Toastr::success('Update Data Sukses', 'Success');
        return redirect()->route('referensisublokasi.index', ['id' => $item->lokasis->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $sublokasi)
    {
        //
        $data = Lokasi::findOrFail($id);
        $item = SubLokasi::findOrFail($sublokasi);
        $item->delete();

        Toastr::error('Delete Data Sukses', 'Success');
        return redirect()->route('referensisublokasi.index', ['id' => $item->lokasis->id]);
    }
}
