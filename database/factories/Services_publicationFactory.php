<?php

namespace Database\Factories;

use App\Models\Publication;
use App\Models\Services_publication;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class Services_publicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Services_publication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'publication_id' => Publication::all()->random(1)->first(),
            'service_id' => Service::all()->random(1)->first()
        ];
    }
}
