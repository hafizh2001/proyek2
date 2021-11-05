<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table="laporans";
    protected $primaryKey="id";
    protected $fillable=['id','uraian','id_produk','produk_masuk','produk_keluar','id_user','id_satuan'];

    public function barang_keluar(){
        return $this->belongsTo(barang_keluar::class);
    }

    public function barang_masuk(){
        return $this->belongsTo(barang_masuk::class);
    }

    public function satuan(){
        return $this->belongsTo(satuan::class);
    }

    public function produk(){
        return $this->hasMany(produk::class);
    }
    public function jenisTransaksi(){
        return $this->belongsTo(jenis_transaksi::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
