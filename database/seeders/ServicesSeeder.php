<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;


class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                "name" => "Wi-Fi",
            ],

            [
                "name" => "Sauna",
            ],

            [
                "name" => "Portiniere",
            ],

            [
                "name" => "Posto Macchina",
            ],

            [
                "name" => "Piscina",
            ],

            [
                "name" => "Vista Mare",
            ],

        ];


        foreach ($services as $service) {

            $newService = new Service();

            $newService->name = $service["name"];


            $newService->save();
        }
    }
}
