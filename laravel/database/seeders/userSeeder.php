<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Factory::create();
        $limit = 30;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('user') -> insert ([
                'user_name' => $fake->name,
                'image' => $fake->imageUrl($width = 200, $height = 200),
                'phone_number' => $fake->numerify($string = '###'),
                'address' => $fake->city,
                'age' => $fake->dateTimeBetween('-40 years', 'now')->format('Y-m-d'),
                'email' => $fake->unique()->email,
                'password' => Hash::make('user123123'),
                'hotel_code' => $fake->unique()->randomNumber(),
            ]);
        }
    }
}
