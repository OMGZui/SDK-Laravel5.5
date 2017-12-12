<?php

use Illuminate\Database\Seeder;
use App\Models\Apply;

class ApplyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Apply::class, 30)->create();
    }
}
