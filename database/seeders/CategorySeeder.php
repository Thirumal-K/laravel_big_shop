<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $categories = [
            ['name' => 'Fresh Produce'],
            ['name' => 'Dairy and Eggs'],
            ['name' => 'Meat and Seafood'],
            ['name' => 'Bakery'],
            ['name' => 'Pantry Staples'],
            ['name' => 'Beverages'],
            ['name' => 'Frozen Foods'],
            ['name' => 'Snacks'],
            ['name' => 'Health and Wellness'],
            ['name' => 'Household Supplies'],
            ['name' => 'Personal Care'],
            ['name' => 'Baby Products'],
            ['name' => 'Pet Supplies'],
            ['name' => 'International Foods'],
        ];

        foreach ($categories as $row) {
            Category::create($row);
        }
       
    }
}