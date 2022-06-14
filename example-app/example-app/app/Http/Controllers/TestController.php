<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function test(){
        return view('index', ['name' => 'Javi', 'age'=>'19','html'=>'<h1>Título</h1>']);
    }
}
