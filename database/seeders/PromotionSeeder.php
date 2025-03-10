<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Lista de promociones con nombres creativos
        $promotions = [
            "Festival Days - Up to 50% Off!",
            "Cyberpunk: Redefine the Future with 30% Off",
            "Black Friday Gaming Extravaganza",
            "Spring Sale - Fresh Deals for Gamers",
            "Summer Madness: 40% Off on Select Titles",
            "Winter Wonderland - Cozy up with Discounts",
            "RPG Legends: 25% Off on Epic Adventures",
            "Multiplayer Mayhem - Save Big on Co-Op Games",
            "Indie Treasures - Hidden Gems at 60% Off",
            "Action Heroes - Your Favorite Titles at a Discount"
        ];

        foreach ($promotions as $promotion) {
            DB::table('promotions')->insert([
                'name' => $promotion,
                'description' => $faker->sentence(10),
                'percentage_discount' => $faker->numberBetween(10, 70),
                'start_date' => Carbon::now()->subDays($faker->numberBetween(0, 30)),
                'end_date' => Carbon::now()->addDays($faker->numberBetween(10, 60)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

