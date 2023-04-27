<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class caculatorController extends Controller
{
    public function index() {
        return view('tinh_toan');
    }
    function tinh(Request $request) {
        $first = $request -> input ('first_number');
        $second = $request -> input ('second_number');
        $tong = $request -> input ('Operator');

        switch($tong) {
            case '+':
                $result = $first + $second;
                break;
            case '-':
                $result = $first - $second;
                break;
            case '*':
                $result = $first * $second;
                break;
            case '/':
                $result = $first / $second;
                break;
        }
        return view('tinh_toan',['result'=> $result]);
    }
}
