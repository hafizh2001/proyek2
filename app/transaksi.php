<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table ="SatuanTable";
    protected $primarykey="id_satuan";
    protected $fillable=['id_transaksi','nama_satuan','nilai'];
    
}
