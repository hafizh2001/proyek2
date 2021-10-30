<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang_keluar extends Model
{
    protected $table="barang_keluar";
    protected $primarykey="id_barangKeluar";
    protected $fillable=['id_barangKeluar','id_laporan','id_produk','jumlah','id_jumlah','id_satuan'];

    public function laporan(){
        return $this->belongsTo(Laporan::class);
    }
}


