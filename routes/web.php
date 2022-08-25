<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// url/{變數}

// 練習二
// /eat/name/4
// view
// 訂位者大名 : name
// 訂位者人數 : num

Route::get('/eat/{name}/{num}', function ($name,$num) {
    
    $data = [
        'name' => $name,
        'num' => $num
    ];

    // return view('f1', ['name' => $name ,'num' => $num]);
    return view('eat', ['data' => $data]);

});

// php artisan route:list
// 兩個變數
Route::get('/greeting/{name}/{num}', function (Request $request,$name,$num) {
    dd($request->input('test'));

    $str = "Hello $name , num => $num";

    // return $str;

    // dd($str);
    $data = [
        'str123' => $str,
        'str456' => $str
    ];

    // return view('f1', ['str123' => $str ,'str456' => $str]);
    return view('f1', ['data' => $data]);

});

// 一個變數
Route::get('/greeting/{name}', function ($name) {

    $str = "Hello $name";

    return $str;

});


// 沒有變數
Route::get('/greeting', function () {
 
    return 'hello';

});



Route::get('/admin_index', function () {
    // dd('hello oop');
    return view('admin.index');

});

Route::get('/oop', function () {
    // dd('hello oop');
    return view('oop');

});


Route::get('/f1', function () {
    return view('f1');
});

Route::get('/f2', function () {
    return view('f2');
});

Route::get('/f3', function () {
    return view('f3');
});


Route::get('/', function () {
    return view('welcome');
});
