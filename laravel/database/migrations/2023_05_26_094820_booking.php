<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking',function(Blueprint $table) {
            $table -> increments('booking_id');
            $table -> string('hotel_code') -> unique();
            $table -> integer('user_id');
            $table -> integer('room_id');
            $table -> dateTime('booking_date');
            $table -> dateTime('check_out_date');
            $table -> float('total_price');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
