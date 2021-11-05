<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang_keluar extends Model
{
    protected $table="barang_keluars";
    protected $primarykey="id";
    protected $fillable=['id','nama_produk','jumlah','id_satuan'];

    public function laporan(){
        return $this->belongsTo(Laporan::class);
    }
}


