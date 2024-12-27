<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Exercise extends Model
{
    /** @use HasFactory<\Database\Factories\ExerciseFactory> */
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function typeExercise(): BelongsTo
    {
        return $this->belongsTo(TypeExercise::class);
    }

    /**
     * @return BelongsTo
     */
    public function targetGroup(): BelongsTo
    {
        return $this->belongsTo(TargetGroup::class);
    }

    public function workouts(): BelongsToMany
    {
        return $this->belongsToMany(Workout::class);
    }
}
