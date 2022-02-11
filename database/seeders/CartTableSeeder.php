<?php

namespace Database\Seeders;
use App\Models\Cart;
use Illuminate\Database\Seeder;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cart::factory()->count(20)->create();
    }
}
