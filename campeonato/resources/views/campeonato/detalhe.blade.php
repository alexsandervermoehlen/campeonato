@extends("layout")

@section('titulo')
    Detalhe do Campeonato <b>{{$campeonato->nome}}</b>
@stop

@section('conteudo')
    Detalhe do Campeonato <b>{{$campeonato->nome}}</b>
    <hr>
    Nome: {{$campeonato->nome}}
@stop