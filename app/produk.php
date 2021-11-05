<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table ="produks";
    protected $primarykey="id";
    protected $fillable=['id','nama_produk','jumlahStok','id_satuan'];

    public function satuan(){
        return $this->belongsTo(satuan::class);
    }
    public function laporan(){
        return $this->hasMany(laporan::class);
    }
}
