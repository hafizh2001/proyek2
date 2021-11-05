<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produk;
use App\satuan;
class DetailProdukController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAll(){
        $produk=produk::with('satuan');
        return view('detailProdukChild',compact('produk'));
    }
    public function tambah(){
        $satuan=satuan::All();
        return view('tambahProdukChild',['satuan'=>$satuan]);
    }
    public function create(request $request){
        produk::create([
            'nama_produk'=>$request->nama_produk,
            'jumlahStok' =>$request->jumlahStok,
            'id_satuan' =>$request->id_satuan,
        ]);
        return redirect('DetailProduk');
    }
    public function edit($id){
        $produk=produk::find($id);
        return view('editProdukChild',['produk'=>$produk]);
    }

    public function update($id,Request $request){
        $produk=produk::find($id);
        $produk->nama_produk=$request->nama_produk;
        $produk->save();
        return redirect('DetailProduk');
    }

    public function delete($id){
        $produk=produk::find($id);
        $produk->delete();
        return redirect('DetailProduk');
    }

}
