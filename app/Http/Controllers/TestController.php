<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome(){
        $a = 10;
        $b = 2;
        $c = $a*$b;
        return \view('welcome');
    }
}
