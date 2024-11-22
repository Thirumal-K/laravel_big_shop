<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Label;

class LabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $product_labels=[
            [
                'name'=> 'Hot',
                'color'=>'#e74c3c'
            ],
            [
                'name'=>'New',
                'color'=>'#2ecc71'
            ],
            [
                'name'=>'Sale',
                'color'=>'#8e44ad'
            ]

        ];
        
        foreach ($product_labels as $row){
            Label::create($row);
        }
    }
}