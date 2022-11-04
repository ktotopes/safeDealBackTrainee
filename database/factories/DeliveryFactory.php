<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Delivery>
 */
class DeliveryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'shipping_address' => $this->faker->address(),
            'delivery_address' => $this->faker->address(),
            'delivery_address_range' => $this->faker->randomFloat(2,0,10),
        ];
    }
}
