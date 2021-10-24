<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Option extends Model
{
    use HasFactory;

     /**
     * Get all of the classrooms for the Level
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function classrooms(): HasMany
    {
        return $this->hasMany(Classroom::class, 'option_id', 'id');
    }

    /**
     * The levels that belong to the Option
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function levels(): BelongsToMany
    {
        return $this->belongsToMany(LevelOption::class, 'level_option', 'option_id', 'level_id');
    }

    /**
     * The modules that belong to the Option
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module_Option::class, "module_option", "option_id", "module_id");
    }
}
