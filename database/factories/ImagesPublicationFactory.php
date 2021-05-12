<?php

namespace Database\Factories;

use App\Models\ImagesPublication;
use App\Models\Publication;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;

class ImagesPublicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ImagesPublication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $image = UploadedFile::fake()->image('avatar1.jpg', 1500, 900)->size(100);
        $nameImage = md5(time()) . '-akunaipa.jpg';
        $cargar = $image->storeAs('public/images', $nameImage);
        $publicationId = Publication::all()->random(1)->first()->id;
        return [
            'url' => env('APP_URL') . 'storage/images/' . $nameImage,
            'order' => $this->faker->numberBetween(1, 4),
            'publication_id' => $publicationId
        ];
    }
}
