<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang_masuk extends Model
{
    protected $table="barang_masuks";
    protected $primarykey="id";
    protected $fillable=['id','id_laporan','id_produk','jumlah','id_satuan','id_user'];

    public function laporan(){
        return $this->belongsTo(Laporan::class);
    }

    
}
