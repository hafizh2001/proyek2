<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis_transaksi extends Model
{
    protected $table ="jenis_transaksis";
    protected $primarykey="id_transaksi";
    protected $fillable=['id_transaksi','jenis_transaksi'];
     
    public function laporan(){
        return $this->hasMany(Laporan::class);
    }
}
