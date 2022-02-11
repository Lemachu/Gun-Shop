<?php

namespace Database\Factories;
use App\Models\Brand;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    protected $model=Brand::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'imeBrand'=>$this->faker->name(),
            'drzava'=>$this->faker->name(),
        ];
    }
}
