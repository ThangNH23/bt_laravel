<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\signupRequest;

class validateController extends Controller
{
    //
    public function index() {
        return view('valid');
    }
    function xuly(signupRequest $request) {
        $user=[
            'name'=>$Name = $request -> input ('Name'),
            'age'=>$Age = $request -> input ('Age'),
            'date'=>$Date = $request -> input('Date'),
            'phone'=>$Phone = $request -> input('Phone'),
            'web'=>$Web = $request -> input ('Web'),
            'address'=>$Address = $request -> input('Address'),
        ];
        return view('valid') -> with('user', $user);
    }
}