<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang_masuk;
class MasukController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAll(){
        $barang_masuk=barang_masuk::All();
        return view('detailBarangMasuk',['barang_masuk'=>$barang_masuk]);
    }
    
}