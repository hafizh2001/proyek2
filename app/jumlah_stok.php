<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jumlah_stok extends Model
{
    protected $table ="jumlahstoks";
    protected $primarykey="id_jumlah";
    protected $fillable=['id_jumlah','id_produk','jusmlah_stok_produk','id_satuan'];

    public function laporan(){
        return $this->hasMany(produk::class);
    }
}
