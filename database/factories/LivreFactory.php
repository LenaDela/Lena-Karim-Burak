<?php

namespace Database\Factories;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'title'=> $this->faker->sentence,
                'summary' => $this->faker->text,
                'ISBN' => $this->faker->sentence,
                'author' => $this->faker->sentence,
                'editor' => $this->faker->text,
                'price' => $this->faker->numberBetween(1, 40)
        ];
    }
}
