<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class PlatformDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Obtener todos los IDs de videojuegos y plataformas existentes
        $videogameIds = DB::table('videogames')->pluck('id')->toArray();
        $platformIds = DB::table('platforms')->pluck('id')->toArray();

        foreach ($videogameIds as $videogameId) {
            // Asignar entre 1 y 4 plataformas a cada videojuego
            $assignedPlatforms = $faker->randomElements($platformIds, $faker->numberBetween(1, 4));

            foreach ($assignedPlatforms as $platformId) {
                DB::table('platform_details')->insert([
                    'platforms_id' => $platformId,
                    'videogames_id' => $videogameId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
