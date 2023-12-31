<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Sponsorship;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            ApartmentsSeeder::class,
            SponsorshipsSeeder::class,
            VisitsSeeder::class,
            MessagesSeeder::class,
            ServicesSeeder::class,
            ApartmentServicesSeeder::class,
            ApartmentSponsorshipsSeeder::class,


        ]);
    }
}
