<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductColorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('prod_colors')->insert([
            'color' => 'Red',
            'hex' => '#FF0000'
        ]);
        DB::table('prod_colors')->insert([
            'color' => 'Green',
            'hex' => '#00FF00'
        ]);
        DB::table('prod_colors')->insert([
            'color' => 'Blue',
            'hex' => '#0000FF'
        ]);
        DB::table('prod_colors')->insert([
            'color' => 'Yellow',
            'hex' => '#FFFF00'
        ]);
        DB::table('prod_colors')->insert([
            'color' => 'Black',
            'hex' => '#000000'
        ]);
        DB::table('prod_colors')->insert([
            'color' => 'White',
            'hex' => '#FFFFFF'
        ]);
        DB::table('prod_colors')->insert([
            'color' => 'Paige',
            'hex' => '#FFDAB9'
        ]);
        DB::table('prod_colors')->insert([
            'color' => 'Brown',
            'hex' => '#A52A2A'
        ]);
        DB::table('prod_colors')->insert([
            'color' => 'Orange',
            'hex' => '#FFA500'
        ]);
    }
}
