<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class Hotel_booking extends Controller {
    public function table() {
        if (!Schema::hasTable('Hotel')) {
            Schema::create ('Hotel', function($table){
                $table -> increments('id_hotel');
                $table -> string('Name');
                $table -> string('Address');
                
            });
        }
    }
}