<?php

use Illuminate\Database\Seeder;

class RaceColSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Race\RaceCol::class, 16)->create();
    }
}
