<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang_masuk extends Model
{
    protected $table="barang_masuk";
    protected $primarykey="id";
    protected $fillable=['id','nama_produk','jumlah','id_satuan'];

    public function laporan(){
        return $this->belongsTo(Laporan::class);
    }

    
}
