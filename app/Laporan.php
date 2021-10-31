<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table="laporans";
    protected $primaryKey="id_laporan";
    protected $fillable=['id_laporan','Uraian','id_produk','produk_masuk','produk_keluar','id_user','id_satuan'];

    public function barang_keluar(){
        return $this->belongsTo(barang_keluar::class);
    }

    public function barang_masuk(){
        return $this->belongsTo(barang_masuk::class);
    }

    public function jenisTransaksi(){
        return $this->belongsTo(jenis_transaksi::class);
    }

}
