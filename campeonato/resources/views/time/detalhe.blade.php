@extends("layout")

@section('titulo')
    Detalhe do Time <b>{{$time->nome}}</b>
@stop

@section('conteudo')
    Detalhe do Time <b>{{$time->nome}}</b>
    <hr>
    Nome: {{$time->nome}} <br>
    Técnico: {{$time->tecnico}}
@stop