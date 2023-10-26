<?php

namespace Database\Seeders;

use App\Models\Sponsorship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsorships = [
            [
                "name" => "Basic",
                "price" => 2.99,
                "time" => 24,
            ],

            [
                "name" => "Silver",
                "price" => 5.99,
                "time" => 72,
            ],

            [
                "name" => "Gold",
                "price" => 9.99,
                "time" => 144,
            ],
        ];


        foreach ($sponsorships as $sponsorship) {
            $newSponsorship = new Sponsorship();
            $newSponsorship->name = $sponsorship["name"];
            $newSponsorship->price = $sponsorship["price"];
            $newSponsorship->time = $sponsorship["time"];
            $newSponsorship->save();
        }
    }
}
