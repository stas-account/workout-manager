<?php

namespace Database\Seeders;

use App\Models\Exercise;
use App\Models\Workout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Workout::factory(3)->has(Exercise::factory(3))->create();
    }
}
