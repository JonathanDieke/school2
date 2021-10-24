<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Level extends Model
{
    use HasFactory;

    /**
     * Get all of the classrooms for the Level
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function classrooms(): HasMany
    {
        return $this->hasMany(Classroom::class, 'level_id', 'id');
    }

    /**
     * The options that belong to the Level
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function options(): BelongsToMany
    {
        return $this->belongsToMany(LevelOption::class, 'level_option', 'level_id', 'option_id');
    }
}
