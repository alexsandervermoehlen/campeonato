@extends("layout")

@section('titulo')
    Listagem de Atletas 
@stop

@section('conteudo')
    <h3>Listagem de Atletas</h3>
    <hr>
    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <table class="table">
        <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Peso</td>
            <td>Altura</td>
            <td>Time</td>
            <td>Alterar</td>
            <td>Remover</td>
        </tr>
        @foreach ($atletas as $p)
            <tr>
                <td><a href="atleta/{{$p->id}}">{{$p->id}}</a></td>
                <td>{{$p->nome}}</td>
                <td>{{$p->peso}}</td>
                <td>{{$p->altura}}</td>
                <td>{{$p->id_time}}</td>
                <td><a href="atleta_update/{{$p->id}}">Alterar</td>
                <td><a href="atleta_delete/{{$p->id}}">Deletar</td>
            </tr>
        @endforeach
    </table>
@stop