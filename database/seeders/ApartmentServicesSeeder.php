<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Apartment;
use App\Models\Service;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ApartmentServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartment_ids = Apartment::pluck('id')->toArray();
        $service_ids = Service::pluck('id')->toArray();

        // apartment #1
        DB::table('apartment_service')->insert([
            'apartment_id' => $apartment_ids[0],
            'service_id' => $service_ids[0],
        ]);

        // apartment #2
        DB::table('apartment_service')->insert([
            'apartment_id' => $apartment_ids[1],
            'service_id' => $service_ids[1],
        ]);

        // apartment #3
        DB::table('apartment_service')->insert([
            'apartment_id' => $apartment_ids[2],
            'service_id' => $service_ids[2],
        ]);
    }
}
