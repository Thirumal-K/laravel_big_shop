<?php

namespace Database\Seeders;

use App\Model\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'thiru@gmail.com',
            'password'=>Hash::make('thiru')
        ]);
        $this->call([
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            LabelSeeder::class,
            TagSeeder::class,
            CompanySeeder::class,
            CollectionSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,

        ]);

    }
    
}
