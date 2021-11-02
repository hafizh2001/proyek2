<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jenis_transaksi;
class JenisTransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getAll(){
        $jenis_transaksi=jenis_transaksi::All();
        return view('jenisTransaksiChild',['jenis_transaksi'=>$jenis_transaksi]);
    }
    
    public function tambahData(){
        return view('tambahJenisTransaksiChild');
    }

    public function create(request $request){
        jenis_transaksi::create([
            'jenis_transaksi'=>$request->jenis_transaksi,
        ]);
        return redirect('JenisTransaksi');
    }

    public function edit($id){
        $jenis_transaksi=jenis_transaksi::find($id);
        return view('editJenisTransaksiChild',['jenis_transaksi'=>$jenis_transaksi]);
    }

    public function update($id,Request $request){
        $jenis_transaksi=jenis_transaksi::find($id);
        $jenis_transaksi->jenis_transaksi=$request->jenis_transaksi;
        $jenis_transaksi->save();
        return redirect('JenisTransaksi');
    }

    public function delete($id){
        $jenis_transaksi=jenis_transaksi::find($id);
        $jenis_transaksi->delete();
        return redirect('JenisTransaksi');
    }
}
