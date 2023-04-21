<?php

namespace App\Http\Controllers; // khai báo nơi lưu trữ

use Illuminate\Http\Request; // khai báo thư viện

class myController extends Controller
{
    //Phương thức index() trả về một view có tên là ket_qua. Đây là một trang web hiển thị form để nhập vào các số và phép tính cần tính.
    public function index() {
        return view('ket_qua');
    }
    function tong( Request $request){
            $first = $request -> input('firstNumber');
            $second = $request -> input('secondNumber');
            $tinh = $request ->input('operator');

            switch($tinh){
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
        return view('ket_qua',['result' => $result]);
    }
}
