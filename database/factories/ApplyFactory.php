<?php

use Faker\Generator as Faker;
use App\Models\Apply;
use Illuminate\Support\Carbon;

$factory->define(Apply::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'group_id' => $faker->randomDigit,
//        'apply_require' => $faker->text,
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
