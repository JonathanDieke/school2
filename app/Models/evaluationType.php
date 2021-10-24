<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EvaluationType extends Model
{
    use HasFactory;

    public $guarded = [];

    /**
     * The marks that belong to the evaluation_tyoe
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function marks(): BelongsToMany
    {
        return $this->belongsToMany(Mark::class, 'marks', 'evaluation_type_id' , 'student_id', );
    }
}
