<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Message;

class MessagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messages = [
            [
                "apartment_id" => 1,
                "name" => "Gigi",
                "lastname" => "Viola",
                "email" => "gigiviola@gmail.com",
                "text" => "Ciao! Appartamento molto bello",
            ],

            [
                "apartment_id" => 1,
                "name" => "Federico",
                "lastname" => "Grosso",
                "email" => "fedegrosso@gmail.com",
                "text" => "Ciao! Appartamento molto brutto",
            ],

            [
                "apartment_id" => 3,
                "name" => "Lorenzo",
                "lastname" => "Bianchi",
                "email" => "lorebianchi@gmail.com",
                "text" => "Ciao! Appartamento bruttissimo",
            ],
        ];


        foreach ($messages as $message) {
            $newMessage = new Message();

            $newMessage->apartment_id = $message["apartment_id"];
            $newMessage->name = $message["name"];
            $newMessage->lastname = $message["lastname"];
            $newMessage->email = $message["email"];
            $newMessage->text = $message["text"];

            $newMessage->save();
        }
    }
}
