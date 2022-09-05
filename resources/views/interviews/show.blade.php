@extends('layouts.main')

@section('title', 'Entrevistas')

@section('content')


<div class="search-box">
    <input type="text" name="" placeholder="Busque uma entrevista">
</div>

@foreach($interviews as $interview)

    <p>Titulo: {{ $interview -> titulo }}</p>
    <p>Descrição: {{ $interview -> descricao }}</p>
    <p>Conteúdo: {{ $interview -> conteudo }}</p>
    <p>----------------------------------</p>

@endforeach


@endsection