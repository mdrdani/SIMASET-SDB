<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use App\Models\SubLokasi;
use App\Models\SubLokasiDua;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\SubLokasiDuaRequest;
use App\Http\Requests\SubLokasiRequest;

class SubLokasiDuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id, $sublokasi)
    {
        //
        $lokasis = Lokasi::findOrFail($id);
        $sublokasis = SubLokasi::findOrFail($sublokasi);
        $items = SubLokasiDua::where('sub_lokasis_id', $sublokasi)->orderBy("created_at", "asc")->get();
        return view('backend.sublokasidua.index',
        ['lokasis' => $lokasis, 
        'sublokasis' => $sublokasis,
        'items' => $items]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id, $sublokasi)
    {
        //
        $lokasis = Lokasi::findOrFail($id);
        $sublokasis = SubLokasi::findOrFail($sublokasi);
        return view('backend.sublokasidua.add',
        ['lokasis' => $lokasis, 
        'sublokasis' => $sublokasis]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubLokasiDuaRequest $request)
    {
        //
        $data = $request->all();

        SubLokasiDua::create($data);
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
    public function edit($id, $sublokasi, $sublokasidua)
    {
        //
         $lokasis = Lokasi::findOrFail($id);
        $sublokasis = SubLokasi::findOrFail($sublokasi);
        $data = SubLokasiDua::findOrFail($sublokasidua);
        return view('backend.sublokasidua.edit',
        ['lokasis' => $lokasis,
            'sublokasis' => $sublokasis,
            'data' => $data    
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubLokasiRequest $request, $id, $sublokasi, $sublokasidua)
    {
        //

        $lokasis = Lokasi::findOrFail($id);
        $sublokasis = SubLokasi::findOrFail($sublokasi);

        $data = $request->all();
        $items = SubLokasiDua::findOrFail($sublokasidua);

        $items->update($data);
        Toastr::success('Update Data Sukses', 'Success');
        return redirect()->route('referensisublokasidua.index', ['id' => $lokasis->id, 'sublokasi' => $sublokasis->id]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $sublokasi, $sublokasidua)
    {
        //
        $lokasis = Lokasi::findOrFail($id);
        $sublokasis = SubLokasi::findOrFail($sublokasi);
        $data = SubLokasiDua::findOrFail($sublokasidua);

        $data->delete();
        
        Toastr::error('Delete Data Sukses', 'Success');
        return redirect()->route('referensisublokasidua.index', ['id' => $lokasis->id, 'sublokasi' => $sublokasis->id]);
    }
}
