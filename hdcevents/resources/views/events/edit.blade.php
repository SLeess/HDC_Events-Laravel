@extends('layouts.main')

@section('title', 'Editando: '. $event->title)

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$event->title}}</h1>
    <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-1">
            <label for="image">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
        </div>
        <div class="form-group mt-3 mb-1">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" required value="{{$event->title}}">
        </div>
        <div class="form-group mt-3 mb-1">
            <label for="date">Data do evento:</label>
            <input type="date" class="form-control" id="date" name="date" required value="{{ date('Y-m-d', strtotime($event->date)) }}">
        </div>
        <div class="form-group mt-3 mb-1">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" required value="{{$event->city}}">
        </div>
        <div class="form-group mt-3 mb-1">
            <label for="private">O evento é privado?</label>
            <select name="private" id="private" class="form-control" required>
                <option value="0">Não</option>
                <option value="1" {{$event->private == 1 ? "selected":""}}>Sim</option>
            </select>
        </div>
        <div class="form-group mt-3 mb-1">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description"  class="form-control" required placeholder="O que vai acontecer no evento?">{{$event->description}}</textarea>
        </div>
        <div class="form-group mt-3 mb-1">
            <label for="items" class="mb-2">Adicione itens de infraesturutra:</label>
            {{-- <p>{{var_dump($event->items)}}</p> --}}
            {{-- <p>{{$event->items['0']}}</p> --}}
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras" {{in_array('Cadeiras', $event->items)?"checked":""}}> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco" {{in_array('Palco', $event->items)?"checked":""}}> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cerveja grátis" {{in_array('Cerveja grátis', $event->items)?"checked":""}}> Cerveja grátis
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Food" {{in_array('Open Food', $event->items)?"checked":""}}> Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes" {{in_array('Brindes', $event->items)?"checked":""}}> Brindes
            </div>
        </div>
        <input type="submit" value="Atualizar dados do Evento" class="btn btn-primary mt-1">
    </form>
</div>
@endsection
