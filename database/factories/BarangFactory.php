<?php

use Faker\Generator as Faker;

$factory->define(App\Barang::class, function (Faker $faker) {
    return [
    	'kode' => "$faker->name",
        'nama' => "$faker->name",
        'kodeharga' => "$faker->name",
        'hbeli' => rand(1, 10000000),
        'hjual' => rand(1, 10000000),
        'hgrosir' => rand(1, 10000000),
        'stoktotal' => rand(1, 1000),
        'created_at' => null,
        'updated_at' => null
    ];
});
