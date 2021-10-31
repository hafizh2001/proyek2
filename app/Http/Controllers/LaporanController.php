<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan;
class LaporanController extends Controller
{
    public function getAll(){
        $laporan=Laporan::all();
        return view('keluarMasukProdukChild',['laporan'=>$laporan]);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
