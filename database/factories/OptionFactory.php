<?php

namespace Database\Factories;

use App\Models\Option;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Option::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "code" => $this->faker->unique()->word,
            "libel" => Str::random(8),
        ];
    }
}
