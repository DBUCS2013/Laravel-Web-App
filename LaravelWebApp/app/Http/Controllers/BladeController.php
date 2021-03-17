<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    function aboutBlade()
    {
        $name = "Abebe Kebede";
        $age =28;
        $x =5;
        $y =2;
        return view('bl',compact('name','age','x','y'));    }
}
