<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin 1',
            'email' => 'laisindo@gmail.com',
            'password' => bcrypt('laisindoadmin2023')
        ]);

        User::create([
            'name' => 'Admin 2',
            'email' => 'laisindo2@gmail.com',
            'password' => bcrypt('laisindoadmin2023')
        ]);

        User::create([
            'name' => 'Admin 3',
            'email' => 'laisindo3@gmail.com',
            'password' => bcrypt('laisindoadmin2023')
        ]);
    }
}
