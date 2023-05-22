<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'course' => $this->faker->numberBetween(1, 4),
            'specialty' => $this->faker->jobTitle,
        ];
    }
}
