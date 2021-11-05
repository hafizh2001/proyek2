<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class satuan extends Model
{
    protected $table ="Satuans";
    protected $primarykey="id";
    protected $fillable=['id','nama_satuan'];
    
    public function produk(){
        return $this->hasMany(produk::class);
    }

}
