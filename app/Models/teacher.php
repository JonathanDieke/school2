<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Teacher extends Model
{
    use HasFactory;

    /**
     * The marks that belong to the subject
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function marks(): BelongsToMany
    {
        return $this->belongsToMany(Mark::class, 'marks', 'teacher_id' , 'evaluation_type_id', );
    }

    /**
     * The teaching that belong to the Teacher
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function teaching(): BelongsToMany
    {
        return $this->belongsToMany(Teachin::class, 'teaching', "teacher_id", "subject_id");
    }
}
