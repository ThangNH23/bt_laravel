<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class typeRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_room')->insert([
            [
                'name_type' => 'VIP',
                'desc_type_room' => 'hạng 5 sao',
            ],
            [
                'name_type' => 'Normal',
                'desc_type_room' => 'hạng 3 hoặc 4 sao',
            ]
        ]);
        
    }
}
