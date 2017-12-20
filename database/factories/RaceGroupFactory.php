<?php

use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(\App\Models\Race\RaceGroup::class, function (Faker $faker_en) {
    $faker = \Faker\Factory::create('zh_CN');
    return [
        'uuid' => $faker->uuid,
        'start_at' => $faker->dateTime,
        'race_id' => $faker->randomElement(range(1, 16)),
        'distance' => $faker->randomElement(range(1, 100)) . 'km',
        'elevation' => $faker->randomElement(range(300, 3000)),
        'fee' => $faker->randomElement(range(10, 3000)) . 'RMB/人',
        'start_line' => $faker->streetAddress,
        'qualification' => $faker->text(40),
        'time_limit' => $faker->randomElement(range(1, 24)) . '小时',
        'quota' => $faker->randomElement(range(1, 3000)),
        'route' => $faker->realText(2000),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
