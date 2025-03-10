<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Faker\Factory as Faker;

class CategoryDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Obtener todos los IDs de videojuegos y categorías existentes
        $videogameIds = DB::table('videogames')->pluck('id')->toArray();
        $categoryIds = DB::table('categories')->pluck('id')->toArray();

        foreach ($videogameIds as $videogameId) {
            // Asignar entre 1 y 3 categorías a cada videojuego
            $assignedCategories = $faker->randomElements($categoryIds, $faker->numberBetween(1, 3));

            foreach ($assignedCategories as $categoryId) {
                DB::table('category_details')->insert([
                    'videogames_id' => $videogameId,
                    'categories_id' => $categoryId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
