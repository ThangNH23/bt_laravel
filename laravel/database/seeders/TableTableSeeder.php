<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hotel')->insert([
        [
            'name' => "Sala",
            'address' => "My Khe",
            'desc_hotel' => "khách sạn sang chảnh",

        ],
        [
            'name' => "Misa",
            'address' => "My Khe beach",
            'desc_hotel' => "khách sạn tuyệt vời",   
        ]]);
    }
}
