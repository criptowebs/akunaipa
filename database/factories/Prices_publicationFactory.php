<?php

namespace Database\Factories;

use App\Models\Price;
use App\Models\Prices_publication;
use App\Models\Publication;
use Illuminate\Database\Eloquent\Factories\Factory;

class Prices_publicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Prices_publication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'publication_id' => Publication::all()->random(1)->first()->id,
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween(5000, 100000)
        ];
    }
}
