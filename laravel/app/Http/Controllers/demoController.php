<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demoController extends Controller
{
    public function xinchao() {
        $name = "huu thang";
        $age = 20;
        $class = "pnv24a";
        $arr = ['Name:' => $name , 'Age:' => $age, 'Class:' => $class];
        return view ('test') -> with ('info', $arr);
        // $title = "xin chào";
        // $content = "hello";
        // return view ('test') -> with (['title'=> $title , 'content' => $content]); //with dùng để lưu các biến trả về
    }

    public function info() {
        $name = 'Thang';
        $age = 20;
        $hometown = 'Quang Binh';
        $arr = ['Name'=> $name, 'Age' => $age, 'Home' => $hometown];
        return view ('test') -> with ('thongtin', $arr);
    }
}
