@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
<h1>Algum título</h1>
<img src="/img/banner.jpg" alt="Banner">
@if(10 < 5)
    <p>A condição é true</p>
@endif
{{--<!-- <p>{{ $nome }}</p> -->--}}
@if($nome == "Pedro")
    <p>O nome é Pedro</p>
@elseif($nome == "Matheus")
    <p>O nome é {{ $nome }}</p>
@else
    <p>O nome não é Pedro</p>
@endif
@endsection