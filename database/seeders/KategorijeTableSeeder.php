<?php

namespace Database\Seeders;
use App\Models\Kategorije;
use Illuminate\Database\Seeder;

class KategorijeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategorije::factory()->count(1)->create();
    }
}
