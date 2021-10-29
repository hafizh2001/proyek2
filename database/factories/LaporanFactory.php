<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Laporan;
use Faker\Generator as Faker;

$factory->define(Laporan::class, function (Faker $faker) {
    return [
        'Uraian'=>$faker->sentence(),
        'id_produk'=>$faker->numberBetween(1,9),
        'produk_masuk'=>$faker->numberBetween(1,500),
        'produk_keluar'=>$faker->numberBetween(1,1000),
        'id_user'=>$faker->numberBetween(1,8)
    ];
});
