<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Programminglanguages;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Programminglanguages>
 */
class ProgramminglanguagesFactory extends Factory
{

    protected $model = Programminglanguages::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
            'creator' => $this->faker->name(),
            'release_date' => $this->faker->date(),
            'description' => $this->faker->paragraph(),
            'current_version' => $this->faker->randomFloat(2, 0, 10),
            'is_active' => $this->faker->boolean(),
            'paradigm' => $this->faker->numberBetween(1, 10),
            'website' => $this->faker->url()
        ];
    }
}
