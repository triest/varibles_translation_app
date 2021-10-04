<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\TestModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TestModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
                'first_name' => $this->faker->firstName(),
                'last_name' => $this->faker->lastName(),
                'middle_name' => $this->faker->lastName(),

        ];
    }
}
