<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for($i = 0; $i<100; $i++) {
            DB::table('books')->insert([
               'title' =>fake()->text(25),
                'thumbnail' =>fake()->imageUrl(),
                'author' =>fake()->text(25),
                'publisher' =>fake()->text(25),
                'publication' =>fake()->date(),
                'price' => rand(100, 1000),
                'quantity' => rand(1, 50), 
                'category_id' => rand(1, 2),
            ]);
        }
    }
}
