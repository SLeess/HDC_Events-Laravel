@extends('layouts.main')

@section('title','Criar Eventos')

@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-1">
            <label for="image">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
        </div>
        <div class="form-group mt-3 mb-1">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" required>
        </div>
        <div class="form-group mt-3 mb-1">
            <label for="date">Data do evento:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>
        <div class="form-group mt-3 mb-1">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" required>
        </div>
        <div class="form-group mt-3 mb-1">
            <label for="private">O evento é privado?</label>
            <select name="private" id="private" class="form-control" required>
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group mt-3 mb-1">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description"  class="form-control" required placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <div class="form-group mt-3 mb-1">
            <label for="items" class="mb-2">Adicione itens de infraesturutra:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Food"> Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
        </div>
        <input type="submit" value="Criar Evento" class="btn btn-primary mt-1">
    </form>
</div>
@endsection
