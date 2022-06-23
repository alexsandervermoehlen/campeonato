@extends("layout")

@section('titulo')
    Detalhe do Atleta: <b>{{$atleta->nome}}</b>
@stop

@section('conteudo')
    Detalhe do Atleta: <b>{{$atleta->nome}}</b>
    <hr>
    Nome: {{$atleta->nome}} <br>
    Peso: {{$atleta->peso}} <br>
    Altura: {{$atleta->altura}} <br>
    Time: {{$atleta->id_time}} 
@stop