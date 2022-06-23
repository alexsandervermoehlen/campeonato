@extends("layout")

@section('titulo')
    Alteração do Campeonato: {{$campeonato->nome}}</b>
@stop

@section('conteudo')
    <form method="POST" action="/campeonato_altera/{{$campeonato->id}}">
        @csrf
        <label for="nome">Nome:</label>
        <input value="{{$campeonato->nome}}" type="text" name="nome" id="nome">
        <input type="submit" value="Enviar">
    </form>
@stop

