<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;

//php artisan make:controller TestController

class TestController extends Controller
{
    public function testFun()
    {
        // dd('testFun ok');
        $price = 100;
        $price = $price * 0.8;
        return view('test', ['price' => $price]);
    }

    public function dis7()
    {
        // dd('testFun ok');
        $price = 100;
        $price = $price * 0.7;
        return view('test', ['price' => $price]);
    }
}
