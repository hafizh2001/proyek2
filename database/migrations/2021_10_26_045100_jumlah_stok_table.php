<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JumlahStokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('jumlahstoks', function (Blueprint $table) {
            $table->bigIncrements('id_jumlahStok');
            $table->integer('id_produk');
            $table->integer('jumlah_stok_produk');
            $table->integer('id_satuan');
            $table->timestamps();
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
