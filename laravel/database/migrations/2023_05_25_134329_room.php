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
        Schema::create('room',function(Blueprint $table) {
            $table -> increments('type_room_id');
            $table -> string('name_type') -> unique();
            $table -> longText('desc_type_room');
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
