<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class satuan extends Model
{
    protected $table ="satuans";
    protected $primarykey="id";
    protected $fillable=['id','nama_satuan','jumlah_dalam_toples'];
    
    public function produk(){
        return $this->hasMany(produk::class);
    }
    public function laporan(){
        return $this->hasMany(laporan::class);
    }

}
