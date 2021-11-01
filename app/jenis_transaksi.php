<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_transaksi extends Model
{
    protected $table ="jenis_transaksis";
    protected $primarykey="id";
    protected $fillable=['id','jenis_transaksi'];
     
    public function laporan(){
        return $this->hasMany(Laporan::class);
    }
}
