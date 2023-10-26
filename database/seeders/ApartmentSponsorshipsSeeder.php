<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Apartment;
use App\Models\Sponsorship;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ApartmentSponsorshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartment_ids = Apartment::pluck('id')->toArray();
        $sponsorship_ids = Sponsorship::pluck('id')->toArray();

        // apartment #1
        DB::table('apartment_sponsorship')->insert([
            'apartment_id' => $apartment_ids[0],
            'sponsorship_id' => $sponsorship_ids[0],
        ]);

        // apartment #2
        DB::table('apartment_sponsorship')->insert([
            'apartment_id' => $apartment_ids[1],
            'sponsorship_id' => $sponsorship_ids[1],
        ]);

        // apartment #3
        DB::table('apartment_sponsorship')->insert([
            'apartment_id' => $apartment_ids[2],
            'sponsorship_id' => $sponsorship_ids[2],
        ]);
    }
}
