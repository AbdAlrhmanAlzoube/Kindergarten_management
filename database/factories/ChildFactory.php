<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Child;
use App\Enum\EducationStage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Child>
 */
class ChildFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'age' => $this->faker->numberBetween(3,5),
            'education_stage'=>$this->faker->randomElement([EducationStage::KG1,EducationStage::KG2,EducationStage::KG3]),
        ];
    }

     
    
     
}
