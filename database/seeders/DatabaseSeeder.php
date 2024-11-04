<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
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
        // User::factory(30)->create();

        User::factory()->create([
            'name' => 'admin',
            'phone' => '+628131953446',
            'password' => Hash::make('12345678'),
            'email' => 'admin@idn.com',
            'role' => 'admin',
        ]);

        // Product::factory()->create([
        //     'name' => 'admin',
        //     'description' => 'Product kita ni wak',
        //     'stock' => 202,
        //     'price' => '200.000',
        //     'image' => 'urlto',
        // ]);
    }
}
