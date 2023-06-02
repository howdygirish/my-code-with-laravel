<?php

namespace Database\Factories;

use App\Models\Common\City;
use Faker\Generator;
use Faker\Provider\en_IN\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CityFactory extends Factory
{
    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = new Generator();
        $address = new Address($faker);
        return [
            'name' => $address->city(),
        ];
    }
}
