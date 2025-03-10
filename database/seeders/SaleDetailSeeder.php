<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SaleDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Obtener todos los IDs de usuarios y videojuegos existentes
        $userIds = DB::table('users')->pluck('id')->toArray();
        $videogameIds = DB::table('videogames')->pluck('id')->toArray();

        // Insertar 30 ventas ficticias
        foreach (range(1, 30) as $index) {
            DB::table('sale_details')->insert([
                'users_id' => $faker->randomElement($userIds),
                'videogames_id' => $faker->randomElement($videogameIds),
                'quantity' => $faker->numberBetween(1, 5), // Cantidad entre 1 y 5
                'sale_date' => $faker->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
