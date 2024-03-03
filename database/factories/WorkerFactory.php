<?php

namespace Database\Factories;

use App\Models\Worker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class WorkerFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected $model = Worker::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $gender = fake()->randomElement(['male', 'female']);
        $image = [
            'male' => ['img/male1.jpg', 'img/male2.jpg'],
            'female' => ['img/female1.jpg', 'img/female2.jpg']
        ];
        return [
            'first_name' => fake()->firstName($gender),
            'last_name' => fake()->firstName($gender),
            'category_id' => fake()->numberBetween(1, 17),
            'image' => fake()->randomElement($image[$gender]),
            'working_hours_start' => '08:00:00',
            'working_hours_end' => '20:00:00',
        ];
    }
}
