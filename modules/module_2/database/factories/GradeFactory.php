<?php

namespace Database\Factories;

use App\Models\Grade;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    protected $model = Grade::class;

    public function definition()
    {
        return [
            'subject' => $this->faker->name,
            'score' => $this->faker->numberBetween(1, 100),
            'date_received' => $this->faker->name,
        ];
    }
}
