<?php

namespace App\Http\Controllers;

use App\Http\Requests\DepartementRequest;
use App\Models\Departement;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class DepartemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Departement::orderBy('created_at', 'desc')->get();
        return view('backend.departemen.index',
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
        return view('backend.departemen.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartementRequest $request)
    {
        //
        $item = $request->all();

        Departement::create($item);

        Toastr::success('Tambah Data Sukses', 'Success');
        return redirect()->route('referensidepartemen.index');
        
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
        $data = Departement::findOrFail($id);
        return view('backend.departemen.edit',
        ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DepartementRequest $request, $id)
    {
        //
        $data = $request->all();

        $item = Departement::findOrFail($id);

        $item->update($data);

         Toastr::success('Update Data Sukses', 'Success');
         return redirect()->route('referensidepartemen.index');
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
        $data = Departement::findOrFail($id);

        $data->delete();

        Toastr::error('Delete Data Sukses', 'Success');
        return redirect()->route('referensidepartemen.index');
    }
}
