<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
use App\jumlah_stok;
class DetailProdukController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAll(){
        $produk=produk::All();
        return view('detailProdukChild',['produk'=>$produk]);
    }
    public function tambah(){
        return view('tambahProdukChild');
    }
    public function create(request $request){
        produk::create([
            'nama_produk'=>$request->nama_produk,
            
        ]);
        return redirect('DetailProduk');
    }


}
