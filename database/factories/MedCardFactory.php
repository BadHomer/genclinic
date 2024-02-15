<?php

namespace Database\Factories;

use App\Models\MedCard;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MedCardFactory extends Factory
{
    protected $model = MedCard::class;

    public function definition(): array
    {
        return [
            'patient' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
