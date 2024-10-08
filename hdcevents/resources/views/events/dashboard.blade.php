@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-content">
    @if (count($events)>0)
    <table id="table-dashboard" class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td scropt="row">{{$loop->index + 1}}</td>
                    <td><a href={{ route('events.show', $event->id) }}>{{$event->title}}</a></td>
                    <td>0</td>
                    <td class="d-flex justify-content-center">
                        <a href="{{ route('events.edit', $event->id) }}" class="btn btn-info edit-btn me-2"><ion-icon name="create-outline"></ion-icon>Editar</a>
                        <form action="{{ route('events.destroy', $event->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Você ainda não tem eventos criados, <a href="{{ route('events.create') }}">Criar evento</a>.</p>
    @endif
</div>
@endsection
