<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan;
use App\produk;
use App\satuan;
use App\barang_masuk;
use App\barang_keluar;
use Carbon\Carbon;
use App\User;
class LaporanController extends Controller
{
    public function getAll(){
        $laporan=Laporan::with(['produk','user','satuan'])->paginate(50);
        return view('keluarMasukProdukChild',['laporan'=>$laporan]);
    }
    public function tambahLaporanMasuk(){
        $produk=produk::All();
        $satuan=satuan::All();
        return view('tambahLaporanBarangMasukChild',['produk'=>$produk,'satuan'=>$satuan]);
    }
    public function createLaporanMasuk(request $request){
        $get_timestamp=Carbon::now();
        Laporan::create([
            'uraian'=>$request->uraian,
            'produk_id'=>$request->produk_id,
            'produk_masuk' =>$request->produk_masuk,
            'produk_keluar' =>$request->produk_keluar,
            'satuan_id' =>$request->satuan_id,
            'user_id'=>$request->user_id,
            //'created_at'=>$get_timestamp,
        ]);
        //$get_laporan=Laporan::All();
        //$get_laporan_id=$get_laporan->where('created_at',$get_timestamp)->get();
        $barang_masuk=barang_masuk::find($request->produk_id);
        $produk=produk::find($request->produk_id);
        $jumlah_a=$produk->jumlahStok;
        $jumlah_b=$request->produk_masuk;
        $jumlah_update=$jumlah_a+$jumlah_b;
        barang_masuk::create([
            'produk_id'=>$request->produk_id,
            //'laporan_id'=>$get_laporan_id->id,
            'jumlah'=>$request->produk_masuk,
            'satuan_id'=>$request->satuan_id,
            'user_id'=>$request->user_id,
        ]);
        
        $produk->jumlahStok=$jumlah_update;
        $produk->satuan_id=$request->satuan_id;
        $produk->save();
        return redirect('KeluarMasukProduk');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function tambahLaporanKeluar(){
        $produk=produk::All();
        $satuan=satuan::All();
        return view('tambahLaporanBarangKeluarChild',['produk'=>$produk,'satuan'=>$satuan]);
    }
    public function createLaporanKeluar(request $request){
        Laporan::create([
            'uraian'=>$request->uraian,
            'produk_id'=>$request->produk_id,
            'produk_masuk' =>$request->produk_masuk,
            'produk_keluar' =>$request->produk_keluar,
            'satuan_id' =>$request->satuan_id,
            'user_id'=>$request->user_id,
        ]);
        $barang_keluar=barang_keluar::find($request->produk_id);
        $produk=produk::find($request->produk_id);
        $jumlah_a=$produk->jumlahStok;
        $jumlah_b=$request->produk_keluar;
        $jumlah_update=$jumlah_a-$jumlah_b;
        barang_keluar::create([
            'produk_id'=>$request->produk_id,
            'jumlah'=>$request->produk_keluar,
            'satuan_id'=>$request->satuan_id,
            'user_id'=>$request->user_id,
        ]);
        
        $produk->jumlahStok=$jumlah_update;
        $produk->satuan_id=$request->satuan_id;
        $produk->save();
        return redirect('KeluarMasukProduk');
    }
}
