<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang_keluar;
class KeluarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAll(){
        $barang_keluar=barang_keluar::All();
        return view('detailBarangKeluar',['barang_keluar'=>$barang_keluar]);
    }
}