<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Product::factory(10)->create();
        // \App\Models\Categary::factory(10)->create();
        \App\Models\VendorToProjuct::factory(10)->create();

    }
}
