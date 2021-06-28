<?php

namespace App\Http\Controllers;

use App\Http\Requests\SumberDanaRequest;
use App\Models\SumberDana;
use Illuminate\Http\Request;

class SumberDanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = SumberDana::orderBy('created_at', 'desc')->get();
        return view('backend.sumberdana.index',
        ['datas' => $datas]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.sumberdana.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SumberDanaRequest $request)
    {
        //
        $data = $request->all();
        SumberDana::create($data);

        return redirect()->route('referensisumberdana.index');
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
        $data = SumberDana::findOrFail($id);

        return view('backend.sumberdana.edit',
        ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SumberDanaRequest $request, $id)
    {
        //
        $data = $request->all();

        $item = SumberDana::findOrFail($id);

        $item->update($data);

        return redirect()->route('referensisumberdana.index');
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
        $item = SumberDana::findOrFail($id);

        $item->delete();

        return redirect()->route('referensisumberdana.index');
    }
}
