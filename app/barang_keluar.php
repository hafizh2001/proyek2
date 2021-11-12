<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang_keluar extends Model
{
    protected $table="barang_keluars";
    protected $primarykey="id";
    protected $fillable=['id','produk_id','jumlah','satuan_id','user_id'];

    public function laporan(){
        return $this->belongsTo(Laporan::class);
    }
    public function satuan(){
        return $this->belongsTo(satuan::class);
    }
    public function produk(){
        return $this->belongsTo(produk::class); 
    }
    public function user(){
        return $this->belongsTo(User::class); 
    }
}


