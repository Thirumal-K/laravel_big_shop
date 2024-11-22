<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $companies = [
            [
                'name' => 'Sri Abirami Stores',
                'user_id' => 2
            ],
            [
                'name' => 'Krishna Stores',
                'user_id' => 3
            ],
        ];

        foreach ($companies as $row) {
            Company::create($row);
        }
    }
}