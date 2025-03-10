<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $platforms = [
            'PC',
            'PlayStation 5',
            'PlayStation 4',
            'Xbox Series X',
            'Xbox One',
            'Nintendo Switch',
            'Steam Deck',
            'Google Stadia',
            'PlayStation VR',
            'Meta Quest 2'
        ];

        foreach ($platforms as $platform) {
            DB::table('platforms')->insert([
                'name' => $platform,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
