<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'tax_id' => $this->faker->swiftBicNumber,
            'phone' => $this->faker->e164PhoneNumber,
            'email' => $this->faker->companyEmail,
            'address' => $this->faker->address,
            'status' => 1,
            'creator_id' => 1,
        ];
    }
}
