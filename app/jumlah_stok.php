<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jumlah_stok extends Model
{
    protected $table ="jumlahstoks";
    
    protected $fillable=['id_produk','jumlah_stok_produk'];
    
    public function produk(){
        return $this->belolongsTo(produk::class);
    }
}
