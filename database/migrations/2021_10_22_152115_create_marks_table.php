<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            // $table->primary(['student_id', 'subject_id', 'teacher_id']);
            $table->foreignId('student_id')->constrained('students');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->foreignId('teacher_id')->constrained('teachers');
            $table->foreignId('evaluation_type_id')->constrained('evaluation_types');
            $table->unique(["student_id", "subject_id", "teacher_id", "evaluation_type_id"]);
            $table->float('marks');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marks');
    }
}
