<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\UserState;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'name' => $this->faker->name,
            'user' => Str::random(10),
            'email_verified_at' => now(),
            'role_id' => $this->faker->numberBetween(2, 3),
            'user_state_id' => UserState::all()->random(1)->first(),
            'avatar' => env('APP_URL') . 'images/avatar/avatar-false.jpg',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
