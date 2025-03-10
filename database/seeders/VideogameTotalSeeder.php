<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class VideogameTotalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Obtener todos los IDs de videojuegos existentes
        $videogameIds = DB::table('videogames')->pluck('id')->toArray();

        foreach ($videogameIds as $videogameId) {
            DB::table('videogame_totals')->insert([
                'videogames_id' => $videogameId,
                'total' => $faker->numberBetween(10, 50), // Generar un total aleatorio entre 10 y 50
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

