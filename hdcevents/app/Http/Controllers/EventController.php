<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use Illuminate\Http\Request;
use App\Models\{Event, User};

class EventController extends Controller
{

    //index action = / = rota principal da aplicação
    public function index(){
        $search = request('search');

        if ($search) {
            $events = Event::where('title', 'like', '%' . $search . '%')->get();
        } else {
            $events = Event::all();
        }

        $now = Carbon::now();

        return view('welcome', compact('events', 'search', 'now'));
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
        $event->date = $request->date;
        $event->items = $request->items;
        $event->image = EventController::validarImagem($request);

        $event->user_id = auth()->user()->id;

        $event->save();
        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function destroy($id){
        Event::findOrFail($id)->delete();
        return redirect()->route('events.dashboard')->with('msg', 'Evento excluído com sucesso!');
    }

    public function edit($id){
        $event = Event::findOrFail($id);
        return view('events.edit', ['event' => $event]);
    }

    public function show($id){
        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
    }

    public function dashboard(){
        $user = auth()->user();
        $events = $user->events;

        return view('events.dashboard', ['events' => $events]);
    }

    public function update(Request $request){
        //Todos os dados do método post viram para a variável request do tipo Request
        $data = $request->all();
        $data['image'] = EventController::validarImagem($request);
        Event::findOrFail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Evento '. $request->title .' editado com sucesso!');
    }

    public function validarImagem($img){
        if($img->hasFile('image') && $img->file('image')->isValid()){
            $requestImage = $img->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . $extension);
            $img->image->move(public_path('img/events'), $imageName);

            return $imageName;
        }
        return null;
    }
}
