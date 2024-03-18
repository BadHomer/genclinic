<?php

namespace Database\Factories;

use App\Models\Education;
use Illuminate\Database\Eloquent\Factories\Factory;

class EducationFactory extends Factory
{
    protected $model = Education::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'speciality' => $this->faker->word(),
            'doctor_id' => $this->faker->randomNumber(),
        ];
    }
}
