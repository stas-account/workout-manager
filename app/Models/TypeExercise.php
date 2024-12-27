<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeExercise extends Model
{
    /** @use HasFactory<\Database\Factories\TypeExerciseFactory> */
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'types_exercises';

    /**
     * @return HasMany
     */
    public function exercises(): HasMany
    {
        return $this->hasMany(Exercise::class, 'type_exercise_id');
    }
}
