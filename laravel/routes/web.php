<?php

// use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//-------------------------------------------------------------------------------------------------------------------
// tinh-toan là đường dẫn  URL để truy cập trang tính toán 
Route::get('tinh-toan', [App\Http\Controllers\myController::class, 'index']); // route thứ nhất để gọi view
Route::post('tinh-toan', [App\Http\Controllers\myController::class, 'tong']); // route thứ hai dùng để tính tổng
//-------------------------------------------------------------------------------------------------------------------

Route::get('triangle',[App\Http\Controllers\caculatorController::class, 'index']);
Route::post('triangle',[App\Http\Controllers\caculatorController::class, 'tinh']);


// Route::post()

Route::get('/thang', function(){
    return 'Nguyễn Hữu Thắng <br> 20 yearl old';
});

Route::get('/', function() {
    return view ('demo');
});

Route::get('/ket_qua',[App\Http\Controllers\demoController::class, 'xinchao']);
Route::get('/test',[App\Http\Controllers\demoController::class, 'xinchao']);


Route::get('tinhtong', function() {
    return view ('sum');
});
Route::post('tinhtong', [App\Http\Controllers\tongController::class, 'tinhtong']);


Route::get('area',[App\Http\Controllers\quadrangeController::class, 'computeArea']);
Route::post('area',[App\Http\Controllers\quadrangeController::class, 'computeArea']);

Route::get('validate',[App\Http\Controllers\validateController::class, 'index']);
Route::post('validate',[App\Http\Controllers\validateController::class, 'xuly']);


Route::get('/master', [App\Http\Controllers\PageController::class,'getIndex']);


Route::get('/db',function() {
    Schema::create ('demo',function($table) {
        $table -> increments('id');
        $table -> string ('name',200);
    });

    echo "đã thực hiện lệnh tạo bảng thành công rồi nhé";
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
