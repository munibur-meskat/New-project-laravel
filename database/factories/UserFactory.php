<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" =>  fake()->name(),
            "user_name" => fake()->userName(),
            "email" => fake()->email(),
            "address" => fake()->address(),
            "password" => Hash::make(123),
        ];
    }
}
