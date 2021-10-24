<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Module extends Model
{
    use HasFactory;

    /**
     * Get all of the subjects for the Module
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subjects(): HasMany
    {
        return $this->hasMany(Subject::class, "module_id", "id");
    }

    /**
     * The options that belong to the Module
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function options(): BelongsToMany
    {
        return $this->belongsToMany(Module_Option::class, "module_option", "module_id", "option_id");
    }
}
