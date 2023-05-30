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
        Schema::create('user',function(Blueprint $table) {
            $table -> increments('user_id');
            $table -> string('user_name');
            $table -> string('image');
            $table -> integer('phone_number');
            $table -> string('address');
            $table -> integer('age');
            $table -> string('email');
            $table -> string('password');
            $table -> integer('hotel_code');
            $table -> integer('role_id');
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
