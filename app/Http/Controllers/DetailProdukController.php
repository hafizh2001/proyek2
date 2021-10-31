<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
class DetailProdukController extends Controller
{
    public function getAll(){
        $produk=produk::All();
        return view('detailProdukChild',['produk'=>$produk]);
    }
}
