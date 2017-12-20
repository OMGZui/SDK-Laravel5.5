<?php

use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(\App\Models\Race\RaceCol::class, function (Faker $faker_en) {
    $faker = \Faker\Factory::create('zh_CN');
    return [
        'uuid' => $faker->uuid,
        'name' => $faker->name,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
