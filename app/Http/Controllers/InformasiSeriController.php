<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Categories;
use Illuminate\Http\Request;

class InformasiSeriController extends Controller
{
    //
    public function index()
    {
        $categories = Categories::all();
        return view('backend.informasiseri.index', [ 'categories' => $categories]);
    }
}
