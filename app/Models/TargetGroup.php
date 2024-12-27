<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TargetGroup extends Model
{
    /** @use HasFactory<\Database\Factories\TargetGroupFactory> */
    use HasFactory;

    /**
     * @return HasMany
     */
    public function exercises(): HasMany
    {
        return $this->hasMany(Exercise::class);
    }
}
