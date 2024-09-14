@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
<x-buscador-de-eventos :search="$search"/>

<h2 id="tittle-events">Próximos Eventos</h2>
<p class='subtitle text-center'>Veja os eventos dos próximos dias</p>
<div id="events-container" class="col-md-12">
    @if($search)
        <h2>Buscando por: {{$search}}</h2>
    @endif
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 d-flex">
            @foreach($events as $event)
                <div class="col">               {{-- height: 315px; --}}
                    <div class="card h-100" style="max-width: 265px; ">
                        <img src="
                        @if($event->image)
                            /img/events/{{ $event->image }}
                        @else
                            /img/template-img-event.jpg
                        @endif
                        " alt="{{ $event->title }}" style="height: 150px; object-fit: cover; object-position: center; ">
                        <div class="card-body">
                            <p class="card-date">{{ date('d/m/Y', strtotime($event->date))}}</p>
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-participants">X Participantes</p>
                            <a href="/events/{{ $event->id }}" class="btn-primary btn">Saber mais</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Última atualização: <br>@php
                                echo $now->diff($event->updated_at)->format('%h horas, %i minutos atras')
                            @endphp
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if(count($events) == 0 && !$search)
            <p>Não há eventos disponíveis</p>
        @elseif(count($events) == 0 && $search)
            <div class="text-center">
                <p>Não foi possível encontrar nenhum evento com "{{ $search }}"!</p>
                <p><a href="/">Ver todos</a></p>
            </div>
        @endif
</div>
@endsection
