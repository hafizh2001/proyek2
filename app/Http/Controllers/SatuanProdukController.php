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
    public function tambahData(){
        return view('tambahSatuanChild');
    }
    public function create(request $request){
        satuan::create([
            'nama_satuan'=>$request->namaSatuan,
            'nilai'=>$request->nilaiSatuan
        ]);
        return redirect('SatuanProduk');
    }
}
