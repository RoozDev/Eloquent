<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create([
            'name' => 'melon',
            'store' => '50',
        ]);

        // Create multiple users using a loop
        for ($i = 0; $i < 40; $i++) {
            Product::create([
                'name' => 'banana' . $i,
                'store' => rand(1,1000),
            ]);
        }
    }
}
