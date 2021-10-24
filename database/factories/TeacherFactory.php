<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'register' => $this->faker->numberBetween(int1:100, int2 :1000),
            'name' => $this->faker->firstName(),
            'lname' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'birthday' => $this->faker->dateTimeBetween('-25 years', '-10 years'),
            'gender' => $this->faker->regexify('^(M|F)'),
            // 'classroom_id' => $this->faker->numberBetween(int1:1, int2 :10),
        ];
    }
}
