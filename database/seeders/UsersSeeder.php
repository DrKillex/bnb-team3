<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                "name" => "Mario",
                "lastname" => "Rossi",
                "email" => "mariorossi@gmail.com"
            ],

            [
                "name" => "Luigi",
                "lastname" => "Bianchi",
                "email" => "luigibianchi@gmail.com"
            ],

            [
                "name" => "Marco",
                "lastname" => "Verdi",
                "email" => "marcoverdi@gmail.com"
            ],
        ];


        foreach ($users as $user) {

            $newUser = new User();

            $newUser->name = $user["name"];
            $newUser->lastname = $user["lastname"];
            $newUser->email = $user["email"];
            $newUser->password = Hash::make("password");
            $newUser->birth_day = null;
            $newUser->remember_token = Str::random(10);
            $newUser->save();
        }
    }
}
