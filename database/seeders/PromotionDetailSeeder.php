<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class PromotionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Obtener los IDs de promociones y videojuegos existentes
        $promotionIds = DB::table('promotions')->pluck('id')->toArray();
        $videogameIds = DB::table('videogames')->pluck('id')->toArray();

        foreach ($videogameIds as $videogameId) {
            // Asignar entre 1 y 3 promociones a cada videojuego
            $assignedPromotions = $faker->randomElements($promotionIds, $faker->numberBetween(1, 3));

            foreach ($assignedPromotions as $promotionId) {
                DB::table('promotion_details')->insert([
                    'promotion_id' => $promotionId,
                    'videogame_id' => $videogameId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
