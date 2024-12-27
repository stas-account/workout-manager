<?php

namespace Database\Seeders;

use App\Models\Exercise;
use App\Models\TargetGroup;
use App\Models\TypeExercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeExercise::factory(3)->create();
        TargetGroup::factory(3)->create();

        Exercise::factory(10)->state(fn () => [
                'type_exercise_id' => TypeExercise::all()->random()->id,
                'target_group_id' => TargetGroup::all()->random()->id
            ]
        )->create();
    }
}
