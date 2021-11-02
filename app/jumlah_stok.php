<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jumlah_stok extends Model
{
    protected $table ="jumlahstoks";
    protected $primarykey="id";
    protected $fillable=['id','id_produk','jumlah_stok_produk','id_satuan'];

    public function laporan(){
        return $this->hasMany(produk::class);
    }
}
