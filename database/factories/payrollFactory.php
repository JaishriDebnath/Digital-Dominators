<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\payroll>
 */
class payrollFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'name' =>fake()->name(),
            'emp_id'=>fake()->word(),
            'branch'=>fake()->word(),
            'pan'=>fake()->randomNumber(5,true),
            'position'=>fake()->jobTitle(),
            'acc'=>fake()->randomNumber(8,true),
            'ifsc'=>fake()->randomNumber(5,true),
            'bankname'=>fake()->name(),
            'bsp'=>fake()->randomNumber(6,true),
            'hra'=>fake()->randomNumber(3,true),
            'tr'=>fake()->randomNumber(3,true),
            'bonus'=>fake()->randomNumber(4,true),
            'ma'=>fake()->randomNumber(4,true),
            'lta'=>fake()->randomNumber(4,true),
            'fday'=>fake()->date(),
            'lday'=>fake()->date(),
            'sa'=>fake()->randomNumber(4,true),
            'it'=>fake()->randomNumber(4,true),
            'pf'=>fake()->randomNumber(3,true),
            'prt'=>fake()->randomNumber(3,true),
            'date'=>fake()->date('d-m-Y'),
        
        ];
    }
}
