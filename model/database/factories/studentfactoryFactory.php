<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\student>
 */
class studentfactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fname' => fake()->firstname(),
            'lname' => fake()->lastname(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phonenumber(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'state' => fake()->state(),
            'zip' => fake()->zip(),
            'birthday' => fake()->dateTimebetween('2000-01', '2010-12-30')->format('y-m-d')

            //
        ];
    }
}
