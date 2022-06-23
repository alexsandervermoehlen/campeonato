@extends("layout")

@section('titulo')
    Alteração do Time: {{$time->nome}}</b>
@stop

@section('conteudo')
    <form method="POST" action="/time_altera/{{$time->id}}">
        @csrf
        <label for="nome">Nome:</label>
        <input value="{{$time->nome}}" type="text" name="nome" id="nome">
        <br>
        <br>
        <label for="tecnico">Técnico:</label>
        <input value="{{$time->tecnico}}" type="text" name="tecnico" id="tecnico">
        <br>
        <input type="submit" value="Enviar">
    </form>
@stop
