<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ApplyTableSeeder::class);
         $this->call(RaceColSeeder::class);
         $this->call(RaceSeeder::class);
         $this->call(RaceGroupSeeder::class);
    }
}
