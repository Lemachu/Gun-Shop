<?php

namespace Database\Factories;
use App\Models\Kategorije;
use Illuminate\Database\Eloquent\Factories\Factory;

class KategorijeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imeKat'=>$this->faker->word(),
            'opisKat'=>$this->faker->text,
            'slikaKat'=>'automatska.jpg',
        ];
    }
}
