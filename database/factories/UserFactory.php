<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'second_name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'sex' => $this->faker->word(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'birthday' => Carbon::now(),
            'email' => $this->faker->unique()->safeEmail(),
            'login' => $this->faker->word(),
            'password' => bcrypt($this->faker->password()),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
