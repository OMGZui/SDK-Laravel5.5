<?php

use Faker\Generator as Faker;
use Illuminate\Support\Carbon;

$factory->define(\App\Models\Apply::class, function (Faker $faker_en) {
    $faker = \Faker\Factory::create('zh_CN');
    return [
        'uuid' => $faker->uuid,
        'group_id' => $faker->randomElement(range(1,16)),
        'name' => $faker->name,
        'email' => $faker->email,
        'certificate' => $faker->randomElement([1,2]),
        'certificate_number' => $faker->creditCardNumber,
        'phone' => $faker->phoneNumber,
        'birthday' => $faker->date(),
        'gender' => $faker->randomElement([1,2]),
        'region_country' => $faker->randomElement([1,2,3]),
        'contact_name' => $faker->name,
        'contact_phone' => $faker->phoneNumber,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
