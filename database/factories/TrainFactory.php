<?php

namespace Database\Factories;

use App\Models\Train;
use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Train::class;

    public function definition()
    {
        return [
            'company'=> fake()->company(),
            'departure_station'=> fake()->city(),
            'arrival_station'=> fake()->city(),
            'departure_time'=>fake()->time('H:i'),
            'arrival_time'=>fake()->time('H:i'),
            'train_code'=>fake()->randomNumber(6),
            'n_wagons'=>fake()->randomDigitNotZero(),
            'on_time'=>fake()->boolean(),
            'cancelled'=>fake()->boolean(5)
        ];
    }
}
