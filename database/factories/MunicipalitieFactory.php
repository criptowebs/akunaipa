<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Municipalitie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MunicipalitieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Municipalitie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'department_id' => Department::factory(),
            'municipalitie_code' => $this->faker->numberBetween(0, 99999999),
            'name' => $this->faker->name(),
        ];
    }
}
