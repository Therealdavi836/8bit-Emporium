<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ReleaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Lista de lanzamientos de videojuegos
        $releases = [
            'The Legend of Zelda: Tears of the Kingdom',
            'Hogwarts Legacy',
            'Starfield',
            'Resident Evil 4 Remake',
            'Final Fantasy XVI',
            'Street Fighter 6',
            'Baldur’s Gate 3',
            'Spider-Man 2',
            'Diablo IV',
            'Elden Ring: Shadow of the Erdtree',
            'God of War: Ragnarok',
            'The Elder Scrolls VI',
            'Grand Theft Auto VI',
            'Fable 4',
            'Assassins Creed: Mirage',
            'Overwatch 2',
            'Bayonetta 3',
            'Silent Hill',
            'The Sims 5',
        ];

        foreach ($releases as $release) {
            DB::table('releases')->insert([
                'name' => $release,
                'description' => $faker->sentence(10),
                'date' => $faker->dateTimeBetween('-3 years', 'now')->format('Y-m-d'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
