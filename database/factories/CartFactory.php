<?php

namespace Database\Factories;
use App\Models\Cart;
use Illuminate\Database\Eloquent\Factories\Factory;

class CartFactory extends Factory
{
    protected $model=Cart::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idKupac'=>$this->faker->numberBetween(1, 16),
            'idGun'=>$this->faker->numberBetween(17, 37),
            'datum'=>now(),
        ];
    }
}
