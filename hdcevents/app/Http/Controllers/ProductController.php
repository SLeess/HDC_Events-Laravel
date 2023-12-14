<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        //busca por parâmetros na URL
        $busca = request('search');
        return view('products', ['busca' => $busca]);
    }

    public function search($id = null) {
        //parametro default $id = 1
        return view('product', ['id' => $id]);
    }
}
