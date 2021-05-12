<?php

namespace Database\Factories;

use App\Helpers\Imgs;
use App\Models\Img_publication;
use App\Models\Publication;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\UploadedFile;
use Intervention\Image\Facades\Image;

class Img_publicationFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Img_publication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $image = UploadedFile::fake()->image('avatar1.jpg', 1500, 900)->size(100);
        $image_resize = Image::make($image->getRealPath());
        // dd($image_resize);
        $publication = Publication::all()->random(1)->first();
        $folderSave = '/images/' . $publication->user_id . '/' . $publication->id . '/';

        $img = Imgs::resizeImage($image,  800);
        $name_image = Imgs::createName($img);
        Imgs::saveImage($img, $name_image, $folderSave);
        // $nameImage = md5(time()) . '-akunaipa.jpg';
        // $cargar = $image->storeAs('public/images', $nameImage);
        $urlImage = env('APP_URL') . 'images/' . $publication->user_id . '/' . $publication->id . '/' . $name_image;

        return [
            'url' => $urlImage,
            'number' => $this->faker->numberBetween(1, 4),
            'publication_id' => $publication->id
        ];
    }
}
