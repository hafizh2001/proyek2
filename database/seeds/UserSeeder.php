<?php

use Illuminate\Database\Seeder;
use \App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u= new \App\User;
        $u->jenis_transaksi="Barang Keluar";
        $u->save();
    }
}
