<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{

    //index action = / = rota principal da aplicação
    public function index(){
        $events = Event::all();
        return view('welcome', ['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }

    public function store(Request $request){
        //Todos os dados do método post viram para a variável request do tipo Request
        $event = new Event;
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/');
    }
}
