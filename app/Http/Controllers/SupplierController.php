<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suplier;

class SupplierController extends Controller
{
public function index() {
    $nama = "Nama Suplier";
    $alamat = "Alamat Suplier";
    $no_telp = "No Telp Suplier";

    return view('suplier.index', compact('nama', 'alamat', 'no_telp'));
}

    
        public function create(){

        return view('suplier.create');
    }



    public function store(Request $request){
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $no_telp = $request->input('no_telp');

        return view('suplier.index', compact('nama', 'alamat', 'no_telp'));
    }
}
