@extends('templates.default')

@section('conteudo')

    <h1>Cursos</h1>
    <h1>Cursos</h1>

    <a class="btn btn-warning" href="/curso/create">Novo</a>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Ações</th>
                <th>Id</th>
                <th>Nome</th>
                <th>Duração</th>
            </tr>
        </thead>

    <tbody>
      @foreach($cursos as $curso)
        <tr>
            <td>
                <a href=""><span class="fa fa-trash-alt"></span></a>
                <a href=""><span class="fa fa-edit"></span></a>
            </td>
            <td>{{$curso->id}}</td>
            <td>{{$curso->nome}}</td>
            <td>{{$curso->duracao}}</td>
        </tr>
      @endforeach
    </tbody>
    </table>

@endsection
