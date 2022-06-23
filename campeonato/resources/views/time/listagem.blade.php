@extends("layout")

@section('titulo')
    Listagem de Times 
@stop

@section('conteudo')
    Listagem de Times 
    <hr>
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <table class="table">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Técnico</td>
            <td>Alterar</td>
            <td>Remover</td>
        </tr>
        @foreach ($times as $p)
            <tr>
                <td><a href="time/{{$p->id}}">{{$p->id}}</a></td>
                <td>{{$p->nome}}</td>
                <td>{{$p->tecnico}}</td>
                <td><a href="time_update/{{$p->id}}">Alterar</td>
                <td><a href="time_delete/{{$p->id}}">Deletar</td>
            </tr>
        @endforeach
    </table>
@stop