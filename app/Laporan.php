<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table="laporans";
    protected $primaryKey="id";
    protected $fillable=['id','uraian','produk_id','produk_masuk','produk_keluar','user_id','satuan_id',
    //'created_at'
];

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
        return $this->belongsTo(produk::class);
    }
    public function jenisTransaksi(){
        return $this->belongsTo(jenis_transaksi::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
