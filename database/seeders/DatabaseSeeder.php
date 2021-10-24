<?php

namespace Database\Seeders;

use App\Models\EvaluationType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        \App\Models\Option::factory(8)->create();
        \App\Models\Level::factory(8)->create();
        \App\Models\Classroom::factory(10)->create();
        \App\Models\Module::factory(10)->create();
        \App\Models\Subject::factory(20)->create();
        \App\Models\Student::factory(20)->create();
        \App\Models\Teacher::factory(20)->create();
        // \App\Models\Teacher::factory(20)->create();
        EvaluationType::create(["libel" => "Examen", "coefficient" => 6]);
        EvaluationType::create(["libel" => "Controle continu", "coefficient" => 4]);
    }
}
