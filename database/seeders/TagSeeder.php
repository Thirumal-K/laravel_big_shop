<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $product_tags = [
            [
                'name' => 'Hand bag'
            ],

            [
                'name' => 'Clothes'
            ],
            [
                'name' => 'Shoes'
            ],
            [
                'name' => 'Bags'
            ],
            [
                'name' => 'Wallet'
            ],
        ];

        foreach ($product_tags as $row){
            Tag::create($row);
        }
    }
}