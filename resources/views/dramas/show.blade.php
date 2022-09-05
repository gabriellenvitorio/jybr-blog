@extends('layouts.main')

@section('title', 'Dramas')

@section('content')


<div class="search-box">
    <input type="text" name="" placeholder="Busque um drama">
</div>

@foreach($dramas as $drama)
    <p>Titulo: {{ $drama['titulo']}}</p>
    <p>Titulo Nativo : {{$drama['titulo_nativo']}}</p>
    <p>Descricao: {{ $drama['descricao ']}}</p>
    <p>Genero: {{ $drama['genero']}}</p>
    <p>Episódios: {{ $drama['episodios'] }}</p>
    <p>-------------------------------------</p>
@endforeach


@endsection