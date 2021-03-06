<?php

namespace Database\Factories;

use App\Models\Favorite;
use App\Models\Publication;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FavoriteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Favorite::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'publication_id' => Publication::all()->random(1)->first()->id,
            'user_id' => User::all()->random(1)->first()->id
        ];
    }
}
