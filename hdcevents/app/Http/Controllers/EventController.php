<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    
    //index action = / = rota principal da aplicação
    public function index(){
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
    }

    public function create(){
        return view('events.create');
    }
}
