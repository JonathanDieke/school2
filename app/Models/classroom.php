<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Classroom extends Model
{
    use HasFactory;

    /**
     * Get all of the students for the classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students(): HasMany
    {
        return $this->hasMany(Student::class, );
    }

    /**
     * The roles that belong to the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Option_Level::class, "option_level", "classroom_id", "option_id");
    }

    /**
     * The marks that belong to the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function registration(): BelongsToMany
    {
        return $this->belongsToMany(Registration::class, 'registrations', 'classroom_id' , 'student_id');
    }

    /**
     * Get the level that owns the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function level(): BelongsTo
    // {
    //     return $this->belongsTo(Level::class, "level_id", "id");
    // }

    /**
     * Get the level that owns the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function option(): BelongsTo
    // {
    //     return $this->belongsTo(Option::class, "option_id", "id");
    // }
}
