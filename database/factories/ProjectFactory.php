<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'body' => $this->faker->paragraph,
            'name' => $this->faker->word,
            'user_id' => 1,
        ];
    }
}
