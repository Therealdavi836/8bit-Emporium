<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class VideogameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Lista de videojuegos reales
        $videogames = [
            'The Legend of Zelda: Breath of the Wild', 'Super Mario Odyssey', 'Red Dead Redemption 2',
            'Cyberpunk 2077', 'The Witcher 3: Wild Hunt', 'Grand Theft Auto V', 'Halo Infinite',
            'Elden Ring', 'Dark Souls III', 'Bloodborne', 'Sekiro: Shadows Die Twice', 'God of War',
            'Spider-Man', 'Horizon Zero Dawn', 'Horizon Forbidden West', 'Resident Evil 4',
            'Resident Evil Village', 'Final Fantasy VII Remake', 'Final Fantasy XVI', 'Doom Eternal',
            'The Last of Us Part II', 'Uncharted 4: A Thief’s End', 'Ghost of Tsushima',
            'Assassin’s Creed Valhalla', 'Far Cry 6', 'Monster Hunter: World', 'Street Fighter 6',
            'Tekken 8', 'Mortal Kombat 11', 'Minecraft', 'Fortnite', 'Apex Legends', 'League of Legends',
            'Dota 2', 'Overwatch 2', 'Call of Duty: Modern Warfare', 'Battlefield 2042',
            'FIFA 23', 'NBA 2K23', 'Rocket League', 'Among Us','Grand Theft Auto VI',
            'The Legend of Zelda: Tears of the Kingdom', 'Super Mario Bros. Wonder', 'Red Dead Redemption 3',
            'Cyberpunk 2200', 'The Witcher 4: Wild Hunt', 'Grand Theft Auto Origins', 'Halo Infinite 2'
        ];

        foreach (range(1, 40) as $index) {
            DB::table('videogames')->insert([
                'title' => $videogames[$index - 1], // Selecciona un título de la lista
                'description' => $faker->sentence(10),
                'price' => $faker->randomFloat(2, 10, 100), // Precio entre $10 y $100
                'suppliers_id' => $faker->numberBetween(1, 10), // Asigna un proveedor aleatorio
                'developers_id' => $faker->numberBetween(1, 10), // Asigna un desarrollador aleatorio
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
