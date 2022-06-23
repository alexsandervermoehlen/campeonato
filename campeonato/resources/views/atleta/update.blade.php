@extends("layout")

@section('titulo')
Alteração do Atleta: {{$atleta->nome}}
@stop

@section('conteudo')
<form method="POST" action="/atleta_altera/{{$atleta->id}}">
        @csrf
        <label for="nome">Nome:</label>
        <input value="{{$atleta->nome}}" type="text" name="nome" id="nome">
        <br>
        <br>
        <label for="peso">Peso:</label>
        <input value="{{$atleta->peso}}" type="text" name="peso" id="peso">
        <br>
        <br>
        <label for="altura">Altura:</label>
        <input value="{{$atleta->altura}}" type="text" name="altura" id="altura">
        <br>
        <br>
        <label for="id_time">Time:</label>
        <input value="{{$atleta->id_time}}" type="number" name="id_time" id="id_time">
        <br>
        <input type="submit" value="Enviar">
    </form>
@stop

