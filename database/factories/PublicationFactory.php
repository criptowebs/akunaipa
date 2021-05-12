<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\Municipalitie;
use App\Models\Publication;
use App\Models\PublicationState;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PublicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Publication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        // User::all()->random(1)->first()->id
        $title =  $this->faker->name;
        return [
            'title' => $title,
            'categorie_id' => Categorie::all()->random(1)->first()->id,
            'direction' => $this->faker->text(10),
            'continuos_service' => $this->faker->boolean(),
            'open' => $this->faker->time(),
            'closed' => $this->faker->time(),
            'phone' => $this->faker->numberBetween(3000000000, 3999999999),
            'whatsapp' => $this->faker->numberBetween(3000000000, 3999999999),
            'email' => $this->faker->email,
            'indication' => $this->faker->text(200),
            'type' => $this->faker->numberBetween(0, 1),
            'description' => $this->faker->text(300),
            'user_id' => 7,
            'municipalitie_id' => Municipalitie::all()->random(1)->first()->id,
            'slug' => Str::slug($title),
            'publication_state_id' => PublicationState::all()->random(1)->first()->id

        ];
    }
}
