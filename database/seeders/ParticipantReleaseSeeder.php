<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ParticipantReleaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Obtener todos los IDs de usuarios y lanzamientos existentes
        $userIds = DB::table('users')->pluck('id')->toArray();
        $releaseIds = DB::table('releases')->pluck('id')->toArray();

        foreach ($userIds as $userId) {
            // Cada usuario puede participar en 1 a 3 lanzamientos
            $participatedReleases = $faker->randomElements($releaseIds, $faker->numberBetween(1, 3));

            foreach ($participatedReleases as $releaseId) {
                DB::table('participant_releases')->insert([
                    'users_id' => $userId,
                    'releases_id' => $releaseId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
