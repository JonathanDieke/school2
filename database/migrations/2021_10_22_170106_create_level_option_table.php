<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_option', function (Blueprint $table) {
            $table->id();
            $table->foreignId('level_id')->constrained('levels');
            $table->foreignId('option_id')->constrained('options');
            $table->foreignId('classroom_id')->constrained('classrooms');
            $table->unique(["level_id", "option_id", "classroom_id"]);
            $table->bigInteger("amount");
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
        Schema::dropIfExists('registrations');
    }
}
