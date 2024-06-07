<?php

namespace Database\Factories;
use App\Models\Employeedata;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employeedata>
 */
class EmployeedataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return mixed>
     */
    public function definition(): array
    {
        return [
            'emp_id' =>fake()->randomNumber(5,true),
            'fname' =>fake()->firstName(),
            'lname' =>fake()->lastName(),
            'email'=>fake()->email(),
            'branch'=>fake()->word(),
            'job'=>fake()->jobTitle(),
            'period'=>fake()->sentence(),
            'salary'=>fake()->randomNumber(5,true),
            'freq'=>fake()->randomElement(),
            'sdate'=>fake()->dateTime(),
            'phone'=>fake()->phoneNumber(),
            'address'=>fake()->address(),
            'state'=>fake()->state(),
            'city'=>fake()->city(),
            'zip'=>fake()->word(),
            'img'=>fake()->url(),
            'gender'=>fake()->title($gender='male'|'female')
        ];
    }
}
