<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jenis_transaksi;
class JenisTransaksiController extends Controller
{
    public function getAll(){
        $jenis_transaksi=jenis_transaksi::All();
        return view('jenisTransaksiChild',['jenis_transaksi'=>$jenis_transaksi]);
    }
}
