<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sex = $this->faker->randomElement(['M', 'F']);
        $gender = $this->faker->randomElement(['male', 'female']);

        return [
            'fname' => $this->faker->firstName($gender),
            'lname' => $this->faker->lastName(),
            'sex' => $sex,
            'dob' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'father_name' => $this->faker->name('male'),
            'mother_name' => $this->faker->name('female'),
            'hometown' => $this->faker->city,
            'nationality' => $this->faker->country,
            'address' => $this->faker->unique->address,
            // 'dob' => now(),
            // 'lname' => $this->faker->name,
            // 'phone' => $this->faker->mobileNumber,
            // 'hometown' => $this->faker->region,
            // 'hometown' => $this->faker->city,
        ];
    }
}
