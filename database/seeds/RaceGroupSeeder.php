<?php

use Illuminate\Database\Seeder;

class RaceGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Race\RaceGroup::class, 16)->create();
    }
}
