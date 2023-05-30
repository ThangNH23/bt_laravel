<?php

namespace App\Http\Controllers;
use App\Models\slide;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
  
public function getIndex(){
        $slide = slide::all();
        return view('page.trangchu',compact('slide'));
    }

    // public function getLoaiSp() {
    //     return view('page.loai_sanpham');
    // }
    // public function getChitiet() {
    //     return view ('page.chitiet_sanpham');
    // }
    // public function getLienhe() {
    //     return view ('page.lienhe');
    // }
}


