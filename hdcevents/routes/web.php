<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $nome = "Matheus";
    $idade = 29;
    $arr = [10,20,30,40,50];
    return view('welcome', 
        [
            'nome' => $nome, 
            'idade' => $idade, 
            'profissao' => 'Programador',
            'arr' => $arr,
            'nomes' => ['Maria', 'José', 'Vinícius', 'Marlan', $nome]
        ]);
});

Route::get('produtos', function () {
    return view('products');
});