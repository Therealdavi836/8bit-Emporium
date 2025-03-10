<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class RechargeTarjetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Tipos de tarjetas y monedas
        $types = ['Prepaid', 'Gift Card', 'Credit'];
        $currencies = ['USD', 'EUR', 'GBP', 'JPY', 'MXN'];

        // Generar 50 tarjetas de recarga aleatorias
        for ($i = 0; $i < 50; $i++) {
            $type = $faker->randomElement($types);
            $currency = $faker->randomElement($currencies);
            $amount = $faker->randomFloat(2, 5, 500); // Rango de 5 a 500 unidades

            DB::table('recharge_tarjets')->insert([
                'code' => strtoupper($faker->unique()->bothify('??###')), // Generar un código único
                'name' => $faker->word() . " " . strtoupper($type),
                'type' => $type,
                'currency' => $currency,
                'amount' => $amount,
                'creation_date' => $faker->date(),
                'expiration_date' => $faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

