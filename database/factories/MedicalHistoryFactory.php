<?php

namespace Database\Factories;

use App\Models\MedicalHistory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MedicalHistoryFactory extends Factory
{
    protected $model = MedicalHistory::class;

    public function definition(): array
    {
        return [
            'med_card_id' => $this->faker->randomNumber(),
            'doctor_id' => $this->faker->randomNumber(),
            'description' => $this->faker->text(),
            'status_id' => $this->faker->randomNumber(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
