<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\SubCategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sub_categories = [
            [
                'name' => 'Fruits',
                'category_id' => 1
            ],
            [
                'name' => 'Vegetables',
                'category_id' => 1
            ],
            [
                'name' => 'Fresh herbs',
                'category_id' => 1
            ],
            [
                'name' => 'Milk',
                'category_id' => 2
            ],
            [
                'name' => 'Cheese',
                'category_id' => 2
            ],
            [
                'name' => 'Yogurt',
                'category_id' => 2
            ],
            [
                'name' => 'Eggs',
                'category_id' => 2
            ],
            [
                'name' => 'Butter and margarine',
                'category_id' => 2
            ],
            [
                'name' => 'Fresh meat (beef, pork, chicken)',
                'category_id' => 3
            ],
            [
                'name' => 'Seafood (fish, shrimp, shellfish)',
                'category_id' => 3
            ],
            [
                'name' => 'Deli meats',
                'category_id' => 3
            ],
            [
                'name' => 'Packaged meat',
                'category_id' => 3
            ],
            [
                'name' => 'Bread',
                'category_id' => 4
            ],
            [
                'name' => 'Pastries',
                'category_id' => 4
            ],
            [
                'name' => 'Cakes and pies',
                'category_id' => 4
            ],
            [
                'name' => 'Cookies and biscuits',
                'category_id' => 4
            ],
            [
                'name' => 'Canned goods',
                'category_id' => 5
            ],
            [
                'name' => 'Dry pasta and grains',
                'category_id' => 5
            ],
            [
                'name' => 'Rice and beans',
                'category_id' => 5
            ],
            [
                'name' => 'Sauces and condiments',
                'category_id' => 5
            ],
            [
                'name' => 'Spices and seasonings',
                'category_id' => 5
            ],
            [
                'name' => 'Baking supplies (flour, sugar, baking powder)',
                'category_id' => 5
            ],
            [
                'name' => 'Water',
                'category_id' => 6
            ],
            [
                'name' => 'Soft drinks',
                'category_id' => 6
            ],
            [
                'name' => 'Juices',
                'category_id' => 6
            ],
            [
                'name' => 'Coffee and tea',
                'category_id' => 6
            ],
            [
                'name' => 'Alcoholic beverages (beer, wine, spirits)',
                'category_id' => 6
            ],
           
            [
                'name' => 'Frozen vegetables and fruits',
                'category_id' => 7
            ],

            [
                'name' => 'Ice cream and desserts',
                'category_id' => 7
            ],
            [
                'name' => 'Frozen meals',
                'category_id' => 7
            ],
            [
                'name' => 'Frozen meat and seafood',
                'category_id' => 7
            ],
            [
                'name' => 'Chips and crisps',
                'category_id' => 8
            ],
            [
                'name' => 'Nuts and seeds',
                'category_id' => 8
            ],
            [
                'name' => 'Popcorn',
                'category_id' => 8
            ],
            [
                'name' => 'Snack bars',
                'category_id' => 8
            ],
            [
                'name' => 'Candy and chocolate',
                'category_id' => 8
            ],
            [
                'name' => 'Vitamins and supplements',
                'category_id' => 9
            ],
            [
                'name' => 'Organic and natural products',
                'category_id' => 9
            ],
            [
                'name' => 'Gluten-free, vegan, and other specialty diet items',
                'category_id' => 9
            ],
            
            [
                'name' => 'Cleaning products',
                'category_id' => 10
            ],
            [
                'name' => 'Paper goods (toilet paper, paper towels)',
                'category_id' => 10
            ],
            [
                'name' => 'Laundry supplies',
                'category_id' => 10
            ],
            [
                'name' => 'Dishwashing supplies',
                'category_id' => 10
            ],
            [
                'name' => 'Shampoo and conditioner',
                'category_id' => 11
            ],
            [
                'name' => 'Soap and body wash',
                'category_id' => 11
            ],
            [
                'name' => 'Toothpaste and oral care',
                'category_id' => 11
            ],
            [
                'name' => 'Deodorants',
                'category_id' => 11
            ],
            [
                'name' => 'Skincare products',
                'category_id' => 11
            ],
            [
                'name' => 'Baby food',
                'category_id' => 12
            ],
            [
                'name' => 'Diapers and wipes',
                'category_id' => 12
            ],
            [
                'name' => 'Baby care products',
                'category_id' => 12
            ],
            [
                'name' => 'Pet food',
                'category_id' => 13
            ],
            [
                'name' => 'Pet toys',
                'category_id' => 13
            ],
            [
                'name' => 'Pet grooming supplies',
                'category_id' => 13
            ],
            [
                'name' => 'Asian cuisine',
                'category_id' => 14
            ],
            [
                'name' => 'Hispanic cuisine',
                'category_id' => 14
            ],
            [
                'name' => 'European cuisine',
                'category_id' => 14
            ],
            [
                'name' => 'Middle Eastern cuisine',
                'category_id' => 14
            ],
        ];

        foreach ($sub_categories as $row) {
            SubCategory::create($row);
        }
    }
}