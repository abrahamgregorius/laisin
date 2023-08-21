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
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('admin123')
        ]);

        User::create([
            'name' => 'Adrians',
            'email' => 'aikhsan032@gmail.com',
            'password' => bcrypt('mahabarata'),
        ]);

        

        Brand::create([
            'brand_name' => 'Toyota'
        ]);

        Brand::create([
            'brand_name' => 'Honda'
        ]);

        Brand::create([
            'brand_name' => 'Chevrolet'
        ]);

        Brand::create([
            'brand_name' => 'Ford'
        ]);

        Brand::create([
            'brand_name' => 'Nissan'
        ]);

        Brand::create([
            'brand_name' => 'Volkswagen'
        ]);

        Brand::create([
            'brand_name' => 'BMW'
        ]);

        Brand::create([
            'brand_name' => 'Mercedes-Benz'
        ]);

        Brand::create([
            'brand_name' => 'Audi'
        ]);

        Brand::create([
            'brand_name' => 'Subaru'
        ]);
        
        Category::create([
            'name' => "Brake"
        ]);


        Category::create([
            'name' => "Brake"
        ]);

        Category::create([
            'name' => "Engine"
        ]);

        Category::create([
            'name' => "Suspension"
        ]);

        Category::create([
            'name' => "Exhaust"
        ]);

        Category::create([
            'name' => "Electrical"
        ]);


        Product::create([
            'name' => 'Toyota Camry',
            'part_number' => 'TC45678',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'brand_id' => 1,
            'category_id' => 1,
            'car_year' => 2022,
        ]);
        
        Product::create([
            'name' => 'Ford F-150',
            'part_number' => 'FF98765',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem.',
            'brand_id' => 4,
            'category_id' => 2,
            'car_year' => 2023,
        ]);
        
        Product::create([
            'name' => 'Honda Civic',
            'part_number' => 'HC12345',
            'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'brand_id' => 2,
            'category_id' => 1,
            'car_year' => 2022,
        ]);
        
        Product::create([
            'name' => 'Chevrolet Equinox',
            'part_number' => 'CE67890',
            'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'brand_id' => 3,
            'category_id' => 2,
            'car_year' => 2023,
        ]);
        
        Product::create([
            'name' => 'Nissan Rogue',
            'part_number' => 'NR23456',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'brand_id' => 5,
            'category_id' => 1,
            'car_year' => 2022,
        ]);

        Product::create([
            'name' => 'Volkswagen Jetta',
            'part_number' => 'VJ34567',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'brand_id' => 6,
            'category_id' => 1,
            'car_year' => 2022,
        ]);
        
        Product::create([
            'name' => 'BMW X5',
            'part_number' => 'BX87654',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem.',
            'brand_id' => 7,
            'category_id' => 2,
            'car_year' => 2023,
        ]);
        
        Product::create([
            'name' => 'Mercedes-Benz C-Class',
            'part_number' => 'MB23456',
            'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'brand_id' => 8,
            'category_id' => 1,
            'car_year' => 2022,
        ]);
        
        Product::create([
            'name' => 'Audi A4',
            'part_number' => 'AA76543',
            'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'brand_id' => 9,
            'category_id' => 1,
            'car_year' => 2023,
        ]);
        
        Product::create([
            'name' => 'Subaru Outback',
            'part_number' => 'SO98765',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'brand_id' => 10,
            'category_id' => 2,
            'car_year' => 2022,
        ]);

        Product::create([
            'name' => 'Toyota Hyundai',
            'part_number' => 'TH12345',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'brand_id' => 1,
            'category_id' => 1,
            'car_year' => 2022,
        ]);
        
        Product::create([
            'name' => 'Honda Accord',
            'part_number' => 'HA67890',
            'description' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem.',
            'brand_id' => 2,
            'category_id' => 1,
            'car_year' => 2023,
        ]);
        
        Product::create([
            'name' => 'Chevrolet Silverado',
            'part_number' => 'CS54321',
            'description' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'brand_id' => 3,
            'category_id' => 2,
            'car_year' => 2022,
        ]);
        
        Product::create([
            'name' => 'Ford Mustang',
            'part_number' => 'FM98765',
            'description' => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'brand_id' => 4,
            'category_id' => 2,
            'car_year' => 2023,
        ]);
        
        Product::create([
            'name' => 'Nissan Sentra',
            'part_number' => 'NS23456',
            'description' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
            'brand_id' => 5,
            'category_id' => 1,
            'car_year' => 2022,
        ]);


    }
}
