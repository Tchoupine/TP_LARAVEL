<?php

namespace Database\Factories;

use App\Models\Freelancer;
use Illuminate\Database\Eloquent\Factories\Factory;

class FreelancerFactory extends Factory
{
    protected $model = Freelancer::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone_number' => $this->faker->phoneNumber,
            'email_address' => $this->faker->unique()->safeEmail,
            'address' => $this->faker->address,
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'profile' => $this->faker->sentence,
            'cv' => $this->faker->url,
        ];
    }
}
