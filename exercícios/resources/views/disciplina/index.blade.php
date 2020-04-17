@extends('templates.default')

@section('conteudo')

    <h1>Disciplina</h1>
    <h1>Disciplina</h1>

    <a class="btn btn-warning" href="/disciplina/create">Novo</a>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Ações</th>
                <th>Id</th>
                <th>Nome</th>
                <th>Curso</th>
            </tr>
        </thead>

    <tbody>
      @foreach($disciplinas as $disciplina)
        <tr>
            <td>
                <a href=""><span class="fa fa-trash-alt"></span></a>
                <a href=""><span class="fa fa-edit"></span></a>
            </td>
            <td>{{$disciplina->id}}</td>
            <td>{{$disciplina->nome}}</td>
            <td>{{$disciplina->curso_id}}</td>
        </tr>
      @endforeach
    </tbody>
    </table>

@endsection
