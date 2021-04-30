<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "designation"=>$this->faker->unique()->realText(30),
            "prix"=>$this->faker->numberBetween(10000, 1000000),
            "description"=>$this->faker->realText(30),
            "quantite"=>$this->faker->numberBetween(5, 5000),
            
        ];
    }
}
