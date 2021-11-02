<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang_keluar extends Model
{
    protected $table="barang_keluar";
    protected $primarykey="id";
    protected $fillable=['id','id_laporan','id_produk','jumlah','id_jumlah','id_satuan'];

    public function laporan(){
        return $this->belongsTo(Laporan::class);
    }
}


