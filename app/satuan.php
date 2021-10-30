<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class satuan extends Model
{
    protected $table ="Satuans";
    protected $primarykey="id_satuan";
    protected $fillable=['id_satuan','nama_satuan','nilai'];
    

}
