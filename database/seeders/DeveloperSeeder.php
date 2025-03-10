<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $developers = [
            'Ubisoft', 'Nintendo', 'Rockstar Games', 'Epic Games', 
            'CD Projekt Red', 'Square Enix', 'Bethesda', 'Valve', 
            'BioWare', 'Insomniac Games', 'Naughty Dog', 'Blizzard Entertainment',
            'Capcom', 'Sega', 'Konami', 'Bandai Namco', 'Electronic Arts',
            'Activision', 'Sony Interactive Entertainment', 'Microsoft Studios',
            'Kojima Productions', 'FromSoftware', 'Gearbox Software', 'Bungie',
            'Respawn Entertainment', 'Tencent Games', 'NetEase Games', 'Warner Bros. Interactive Entertainment',
            '2K Games', 'THQ Nordic', 'Paradox Interactive', 'Focus Entertainment',
            'PlatinumGames', 'Remedy Entertainment', 'Playground Games', 'Obsidian Entertainment',
            'Riot Games', 'Guerrilla Games', 'Treyarch', 'Infinity Ward', 'Sledgehammer Games',
        ];
        
        foreach ($developers as $developer) {
            DB::table('developers')->insert([
                'name' => $developer,
                'country' => $faker->country,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
    }
}
