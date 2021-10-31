<?php

namespace App\Http\Controllers;
use App\satuan;
use Illuminate\Http\Request;

class SatuanProdukController extends Controller
{
    public function getAll(){
        $satuan=satuan::All();
        return view('satuanProdukChild',['satuan'=>$satuan]);
    }
}
