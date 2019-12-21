<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\ProdukKategori;
$factory->define(ProdukKategori::class, function (Faker $faker) {
    $nama = $faker->name;
    $slug = substr(str_slug($nama, '-'), 0, 190);
    return [
        'nama' => $nama,
        'slug' => $slug
    ]; 
});
