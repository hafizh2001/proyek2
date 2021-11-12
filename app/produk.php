<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table ="produks";
    protected $primarykey="id";
    protected $fillable=['id','nama_produk','jumlahStok','satuan_id'];

    public function satuan(){
        return $this->belongsTo(satuan::class);
    }
    public function laporan(){
        return $this->hasMany(Laporan::class);
    }
    public function barang_keluar(){
        return $this->hasMany(barang_keluar::class);
    }
    public function barang_masuk(){
        return $this->hasMany(barang_masuk::class);
    }
}
