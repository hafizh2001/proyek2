<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jumlah_stok extends Model
{
    protected $table ="jumlahstoks";
    protected $primarykey="id_jumlah";
    protected $fillable=['i_jumlah','id_produk','jumlah_stok_produk','id_satuan'];

    public function laporan(){
        return $this->belolongsTo(produk::class);
    }
}
