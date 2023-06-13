<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MissionSkill>
 */
class MissionSkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'mission_id' => $this->faker->numberBetween(1,40),
            'skill_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
