@extends('layouts.main')

@section('title', 'Jinyoung Brasil')

@section('content')

<div id="interviews-container" class="col-md-12">
    <h2>Conteúdos da Welcome</h2>
    <p class="subtitle" >Veja as entrevistas existentes</p>

    <div id="cards-container" class="row">

    <p>Teste welcome</p>

    @foreach($interviews as $interview)
    <p>{{ $interview -> titulo }}</p>
    <p>{{ $interview -> descricao }}</p>
    <p>{{ $interview -> conteudo }}</p>
    <p>----------------------------------</p>
    @endforeach
        
    </div>
</div>

@endsection