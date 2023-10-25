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
                "address" => "Via A. Fioravanti 6, 20154, Milan, Italy",
                "lat" => "45.48341199944106",
                "lon" => "9.177795219044416",
                "visible" => true
            ],

            [
                "user_id" => 1,
                "name" => "Glam",
                "slug" => "glam",
                "address" => "Piazza Duca D'aosta 4/6, 20124, Milan, Italy",
                "lat" => "45.483844947892365",
                "lon" => "9.203514637578941",
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
