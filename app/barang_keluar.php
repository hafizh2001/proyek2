<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang_keluar extends Model
{
    protected $table="barang_keluars";
    protected $primarykey="id";
    protected $fillable=['id','id_laporan','nama_produk','jumlah','id_satuan','id_user'];

    public function laporan(){
        return $this->belongsTo(Laporan::class);
    }
}


