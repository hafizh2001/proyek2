<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan;
use App\produk;
use App\satuan;
use App\barang_masuk;
use App\barang_keluar;
class LaporanController extends Controller
{
    public function getAll(){
        $laporan=Laporan::all();
        return view('keluarMasukProdukChild',['laporan'=>$laporan]);
    }

    public function tambah(){
        $produk=produk::All();
        $satuan=satuan::All();
        return view('tambahLaporanBarangMasukChild',['produk'=>$produk,'satuan'=>$satuan]);
    }
    public function createLaporanMasuk(request $request){
        Laporan::create([
            'Uraian'=>$request->uraian,
            'id_produk'=>$request->id_produk,
            'produk_masuk' =>$request->produk_masuk,
            'produk_keluar' =>$request->produk_keluar,
            'id_satuan' =>$request->id_satuan,
            'id_user'=>$request->id_user,
            
        ]);
        $barang_masuk=barang_masuk::find($request->id_produk);
        $produk=produk::find($request->id_produk);
        $jumlah_a=$produk->jumlahStok;
        $jumlah_b=$request->produk_masuk;
        $jumlah_update=$jumlah_a+$jumlah_b;
        barang_masuk::create([
            'nama_produk'=>$produk->nama_produk,
            'jumlah'=>$request->produk_masuk,
            'id_satuan'=>$request->id_satuan,
            'id_user'=>$request->id_user,
        ]);
        
        $produk->jumlahStok=$jumlah_update;
        $produk->id_satuan=$request->id_satuan;
        $produk->save();
        return redirect('KeluarMasukProduk');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
