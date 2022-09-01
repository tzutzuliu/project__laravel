<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

//像是base檔案直接include進來;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\BikeController;
 

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

//Route::get('/student/{name}/{num}',function($name, $num){
//    return "Name $name num $num";
//});


//那個路徑''111是可以被改掉的,那是路徑;
//要在Route路徑這邊寫的時候,上面記得要use base檔案;
//就像是include進php檔案一樣;
//Route::resource('111', PhotoController::class);
//Route::resource('bikes', BikeController::class);

Route::resource('students', BikeController::class);

//Route::get('/student/{name}/{num}', [StudentController::class,'getByUrl']);
//Route::get('/student', [StudentController::class,'index'])->name('student123');


Route::get('/',function(){
    return view('welcome');
});
