<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSizesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prod_sizes')->insert([
            'size' => 'XS',
            'description' => 'Extra Small'
        ]);
        DB::table('prod_sizes')->insert([
            'size' => 'S',
            'description' => 'Small'
        ]);
        DB::table('prod_sizes')->insert([
            'size' => 'M',
            'description' => 'Medium'
        ]);
        DB::table('prod_sizes')->insert([
            'size' => 'L',
            'description' => 'Large'
        ]);
        DB::table('prod_sizes')->insert([
            'size' => 'XL',
            'description' => 'Extra Large'
        ]);
        DB::table('prod_sizes')->insert([
            'size' => 'XXL',
            'description' => 'Double Extra Large'
        ]);
    }
}
