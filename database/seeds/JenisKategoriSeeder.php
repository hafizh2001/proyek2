<?php

use Illuminate\Database\Seeder;
use \App\jenis_transaksi;
class JenisKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jt= new \App\jenis_transaksi;
        $jt->jenis_transaksi="Barang Keluar";
        $jt->save();
        $jt2= new \App\jenis_transaksi;
        $jt2->jenis_transaksi="Barang Masuk";
        $jt2->save();
        $this->command->info("data jenis transaksi berhasil ditambahkan");
    }
}
