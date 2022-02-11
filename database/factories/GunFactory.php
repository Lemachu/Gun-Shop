<?php

namespace Database\Factories;
use App\Models\Gun;
use Illuminate\Database\Eloquent\Factories\Factory;

class GunFactory extends Factory
{
    protected $model=Gun::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nazivGun'=>$this->faker->word(),
            'idBrend'=>$this->faker->numberBetween(1, 5),
            'idKat'=>$this->faker->numberBetween(1, 6),
            'opis'=>$this->faker->text,
            'cijena'=>$this->faker->numberBetween(200, 2000),
            'rating'=>$this->faker->numberBetween(1, 5),
            'slikaGun'=>'1642859858.jpg',
        ];
    }
}
