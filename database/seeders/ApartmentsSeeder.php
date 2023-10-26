<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Apartment;

class ApartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $apartments = [
            [
                "user_id" => 1,
                "name" => "Ramada Plaza Milano",
                "slug" => "ramada-plaza-milano",
                "address" => "Via Stamira d'Ancona, 27, 20127, Milan, Italy",
                "lat" => "45.50174215888503",
                "lon" => "9.227578581729945",
                "visible" => true
            ],

            [
                "user_id" => 1,
                "name" => "Hotel VIU Milan",
                "slug" => "hotel-viu-milan",
                "address" => "Via Galileo Galilei, 30",
                "lat" => "45.502868232679766",
                "lon" => "9.373672466770707",
                "visible" => true
            ],

            [
                "user_id" => 1,
                "name" => "Glam",
                "slug" => "glam",
                "address" => "Via Lombardia, 26, 20096 Pioltello MI",
                "lat" => "45.48395136187267",
                "lon" => "9.324991539722623",
                "visible" => false
            ],
        ];

        foreach ($apartments as $apartment) {

            $newApartment = new Apartment();

            $newApartment->user_id = $apartment["user_id"];
            $newApartment->name = $apartment["name"];
            $newApartment->slug = $apartment["slug"];
            $newApartment->rooms = null;
            $newApartment->beds = null;
            $newApartment->bathrooms = null;
            $newApartment->mq = null;
            $newApartment->address = $apartment["address"];
            $newApartment->lat = $apartment["lat"];
            $newApartment->lon = $apartment["lon"];
            $newApartment->photo = null;
            $newApartment->visible = $apartment["visible"];
            $newApartment->save();
        }
    }
}
