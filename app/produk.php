<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table ="produks";
    protected $primarykey="id_produk";
    protected $fillable=['id_produk','nama_produk','id_jumlahStok'];
    
    public function jumlahStok(){
        return $this->belongsTo(produk::class);
    }
}
