<?php

use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(\App\Models\Race\Race::class, function (Faker $faker_en) {
    $faker = \Faker\Factory::create('zh_CN');
    return [
        'uuid' => $faker->uuid,
        'user_id' => 1,
        'col_id' => $faker->randomElement(range(1, 30)),
        'cover' => $faker->imageUrl(255),
        'region' => $faker->randomElement(['大陆', '港澳台']),
        'name' => $faker->name,
        'en_name' => $faker_en->name,
        'type' => $faker->randomElement(range(1, 10)),
        'estimate' => $faker->randomElement([1, 2]),
        'date' => $faker->date(),
        'address' => $faker->address,
        'url' => $faker->domainName,
        'desc' => $faker->text(50),
        'app_desc' => $faker->text(1000),
        'contact' => $faker->phoneNumber,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
