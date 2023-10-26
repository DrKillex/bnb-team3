<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Visit;


class VisitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $visits = [
            [
                "apartment_id" => 1,
                "ip" => "79.49.224.173",
                "date" => ''
            ],

            [
                "apartment_id" => 1,
                "ip" => "89.89.234.193",
                "date" => ''
            ],

            [
                "apartment_id" => 2,
                "ip" => "79.43.227.193",
                "date" => ''
            ],
        ];


        foreach ($visits as $visit) {

            $newVisit = new Visit();

            $newVisit->apartment_id = $visit["apartment_id"];
            $newVisit->ip = $visit["ip"];
            $newVisit->date = date('Y-m-s H:i-s', time());

            $newVisit->save();
        }
    }
}
