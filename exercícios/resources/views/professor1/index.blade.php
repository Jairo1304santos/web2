@extends('templates.default')

@section('conteudo')

    <h1>Professores</h1>
    <h1>Professores</h1>

    <a class="btn btn-warning" href="/professor/create">Novo</a>
    <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>Ações</th>
                <th>Id</th>
                <th>Nome</th>
                <th>Matricula</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>email</th>
                <th>cep</th>
                <th>logradouro</th>
                <th>Complemento</th>
                <th>Bairro</th>
                <th>UF</th>
                <th>Município</th>
            </tr>
        </thead>

    <tbody>
      @foreach($professores as $professor)
        <tr>
            <td>
                <a href=""><span class="fa fa-trash-alt"></span></a>
                <a href=""><span class="fa fa-edit"></span></a>
            </td>
            <td>{{$professor->id}}</td>
            <td>{{$professor->nome}}</td>
            <td>{{$professor->matricula}}</td>
            <td>{{$professor->cpf}}</td>
            <td>{{$professor->telefone}}</td>
            <td>{{$professor->email}}</td>
            <td>{{$professor->cep}}</td>
            <td>{{$professor->logradouro}}</td>
            <td>{{$professor->complemento}}</td>
            <td>{{$professor->bairro}}</td>
            <td>{{$professor->uf}}</td>
            <td>{{$professor->municipio}}</td>
        </tr>
      @endforeach
    </tbody>
    </table>

@endsection