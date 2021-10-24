<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;

    /**
     * Get the classroom that owns the student
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class, "classroom_id", "id");
    }

    /**
     * The marks that belong to the Subject
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function marks(): BelongsToMany
    {
        return $this->belongsToMany(Mark::class, 'marks', 'student_id' , 'subject_id');
    }

    /**
     * The marks that belong to the Classroom
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function registration(): BelongsToMany
    {
        return $this->belongsToMany(Registration::class, 'registrations', 'student_id' , 'classroom_id');
    }


}
