<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\TestController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testing', function(){
    $msg = "[+] Mensaje desde el servidor";
    return view('testing',['msg' => $msg]);
    // Se puede enviar variables a la view a traves de una array => [''='',*] para usarse en el view
    // Para limpiar el código, se puede transferir la data a una variable externa dentro de Route::get()
});

Route::get('/testing2', function(){
    $msg = "[+] Mensaje desde el servidor";
    $data = ['msg' => $msg];

    return view('testing', $data);
});
Route::get('/contacto',function(){
    return view('contacto');
});

Route::get('/contactame', function(){
    return view('contacto');
})->name('contacto');
    // Para darle un nombre a la ruta vamos a usar ->name('[nombre]')
    // El name('[Nombre]') no tiene porque coincidir con el URI de Route::get('[URI]')

Route::get('/test',[App\Http\Controllers\TestController::class, 'test']);
    //Existe 2 formas de identificar los controladores:
        //1. En la cabecera del fichero con use
        //2. En el Route directamente
