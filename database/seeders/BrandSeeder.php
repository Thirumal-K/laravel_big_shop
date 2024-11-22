<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $brands=[
            ['name'=>'layse'],
            ['name'=>'apple'],
            ['name'=>'masaa'],
            ['name'=>'sprite'],
            ['name'=>'msi'],
            ['name'=>'hp']
        ];

        foreach ($brands as $row) {
            Brand::create($row);
        }
    }
}