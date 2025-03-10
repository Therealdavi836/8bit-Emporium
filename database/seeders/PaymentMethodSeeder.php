<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Métodos de pago disponibles
        $paymentMethods = ['Credit Card', 'PayPal', 'Bank Transfer', 'Gift Card', 'Cryptocurrency'];

        // Obtener todos los IDs de usuarios existentes
        $userIds = DB::table('users')->pluck('id')->toArray();

        foreach ($userIds as $userId) {
            DB::table('payment_methods')->insert([
                'users_id' => $userId,
                'PaymentMethod' => $faker->randomElement($paymentMethods),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

