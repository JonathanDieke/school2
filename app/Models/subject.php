<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Subject extends Model
{
    use HasFactory;

    /**
     * The marks that belong to the Student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function marks(): BelongsToMany
    {
        return $this->belongsToMany(Mark::class, 'marks', 'subject_id' , 'teacher_id');
    }

    /**
     * Get the module  that owns the Subject
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class, 'module_id', 'id');
    }

    /**
     * The teaching that belong to the Subject
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function teaching(): BelongsToMany
    {
        return $this->belongsToMany(Teaching::class, "teaching", "subject_id", "teacher_id");
    }
}
