<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\PhotoCommentController;


// 類次這樣的 先註解;
//use App\Http\Controllers\Controller;
//use App\Models\User;


class StudentController extends Controller

{
    public function index(){
        //dd('hello index student');
        return view('index');
    }

    //public function gerByUrl($name,$num){
        //dd($request);
    //    $data = [$name,$num];
    //    dd($data);
    //}

    public function getByUrl(Request $request,$name,$num){
        dd($request);
        $data = [$name,$num];
        dd($data);
    }



}
