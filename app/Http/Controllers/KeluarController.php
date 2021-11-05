<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeluarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAll(){
        $keluar=barang_keluar::All();
        return view('detailBarangKeluar',['keluar'=>$keluar]);
    }
}