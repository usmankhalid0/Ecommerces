<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VendorToProjuctFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>\App\Models\User::factory(),
            'product_id'=>\App\Models\Product::factory(),
            'categary_id'=>\App\Models\Categary::factory(),
        ];
    }
}
