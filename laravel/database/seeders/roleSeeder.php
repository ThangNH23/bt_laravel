<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Factory::create();
        $limit = 5;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('role') -> insert([
                'role_name' => $fake->name,
                'role_desc' => $fake->country
            ]);
        }
    }
}
