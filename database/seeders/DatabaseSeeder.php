<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Registro de todos los seeders de la base de datos
        $this->call(SupplierSeeder::class);
        $this->call(DeveloperSeeder::class);
        $this->call(VideogameSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SaleDetailSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CategoryDetailSeeder::class);
        $this->call(ReleaseSeeder::class);
        $this->call(ParticipantReleaseSeeder::class);
        $this->call(PlatformSeeder::class);
        $this->call(PlatformDetailSeeder::class);
        $this->call(PromotionSeeder::class);
        $this->call(RechargeTarjetSeeder::class);
        $this->call(PromotionDetailSeeder::class);
        $this->call(PaymentMethodSeeder::class);
        $this->call(VideogameTotalSeeder::class);
    }
}
