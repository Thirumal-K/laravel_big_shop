<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Collection;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        
        $product_collections =[
            [
                'name'=> 'New Arrival'
                
            ],
            [
                'name'=>'Best Seller',
                
            ],
            [
                'name'=>'Special Offer',
              
            ]
        ];
        
        foreach ($product_collections as $row) {
            Collection::create($row);
        }

    }
}