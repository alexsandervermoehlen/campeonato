@extends("layout")

@section('titulo')
    Listagem de Campeonatos
@stop

@section('conteudo')
    <h3>Listagem de Campeonatos</h3>
    <hr>
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <table class="table">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Alterar</td>
            <td>Remover</td>
        </tr>
        @foreach ($campeonatos as $p)
            <tr>
                <td><a href="campeonato/{{$p->id}}">{{$p->id}}</a></td>
                <td>{{$p->nome}}</td>
                <td><a href="campeonato_update/{{$p->id}}">Alterar</td>
                <td><a href="campeonato_delete/{{$p->id}}">Remover</td>
            </tr>
        @endforeach
    </table>
@stop