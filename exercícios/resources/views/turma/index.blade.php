@extends('templates.default')

@section('conteudo')

    <h1>Turmas</h1>
    <h1>Turmas</h1>

    <a class="btn btn-warning" href="/turma/create">Novo</a>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Ações</th>
                <th>Id</th>
                <th>Disciplina_id</th> 
                <th>Tutor_id</th>
            </tr>
        </thead>

    <tbody>
      @foreach($turmas as $turma)
        <tr>
            <td>
                <a href=""><span class="fa fa-trash-alt"></span></a>
                <a href=""><span class="fa fa-edit"></span></a>
            </td>
            <td>{{$turma->id}}</td>
            <td>{{$turma->disciplina_id}}</td>
            <td>{{$turma->tutor_id}}</td>
        </tr>
      @endforeach
    </tbody>
    </table>

@endsection