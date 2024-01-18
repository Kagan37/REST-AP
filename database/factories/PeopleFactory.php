<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name'=>$this->faker->firstname,
           'phone_number'=>$this->faker->biasedNumberBetween($min = 111111111, $max = 999999999, $function = 'sqrt'),
           'city'=>$this->faker->city,
           'street'=>$this->faker->streetName,
           'last_name'=>$this->faker->lastname,
        ];
    }
}
