<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkoutExercise extends Model
{
    use HasFactory;

    protected $fillable = [
        'workout_id',
        'exercise_id',
        'sets',
        'reps',
        'position',
    ];

    public function exercise(): BelongsTo{
        return $this->belongsTo(Exercise::class);
    }

    public function workout(): BelongsTo{
        return $this->belongsTo(Workout::class);
    }
}
