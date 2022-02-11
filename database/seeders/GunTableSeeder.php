<?php

namespace Database\Seeders;
use App\Models\Gun;
use Illuminate\Database\Seeder;

class GunTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gun::factory()->count(10)->create();
    }
}
