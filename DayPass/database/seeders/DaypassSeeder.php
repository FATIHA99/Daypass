<?php

namespace Database\Seeders;

use App\Models\Daypass;
use Carbon\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DaypassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Daypass::factory()
        ->count(10)
   
        ->create();
    }
}
