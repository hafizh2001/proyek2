<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAll(){
        $masuk=barang_masuk::All();
        return view('detailBarangMasuk',['masuk'=>$masuk]);
    }
    
}