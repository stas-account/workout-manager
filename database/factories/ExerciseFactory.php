<?php

namespace Database\Factories;

use App\Models\TargetGroup;
use App\Models\TypeExercise;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Exercise>
 */
class ExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->sentence(5),
            'image' => Str::random(10) . '.' . fake()->fileExtension(),
//            'type_exercise_id' => TypeExercise::factory(),
//            'target_group_id' => TargetGroup::factory()
        ];
    }
}
