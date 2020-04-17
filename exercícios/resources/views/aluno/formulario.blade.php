@extends('templates.default')

@section('conteudo')

    <h1>Aluno</h1>
    <h1>Aluno</h1>

    <form action="/aluno" method="post">
        @csrf

        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
        </div>

        <div class="form-group row">
            <label for="telefone" class="col-sm-2 col-form-label">Telefone:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="telefone" id="telefone">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="email" id=email">
            </div>
        </div>
        <div class="form-group row">
            <label for="cep" class="col-sm-2 col-form-label">Cep:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="cep" id="cep">
            </div>
        </div>
        <div class="form-group row">
            <label for="logradouro" class="col-sm-2 col-form-label">Logradouro:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="logradouro" id="logradouro">
            </div>
        </div>
        <div class="form-group row">
            <label for="complemento" class="col-sm-2 col-form-label">Complemento:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="complemento" id="complemento">
            </div>
        </div>
        <div class="form-group row">
            <label for="bairro" class="col-sm-2 col-form-label">Bairro:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="bairro" id="bairro">
            </div>
        </div>
        <div class="form-group row">
            <label for="uf" class="col-sm-2 col-form-label">UF:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="uf" id="uf">
            </div>
        </div>
        <div class="form-group row">
            <label for="municipio" class="col-sm-2 col-form-label">Municipio:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="municipio" id="municipio">
            </div>
        </div>
        <div class="form-group row">
            <label for="data_nascimento" class="col-sm-2 col-form-label">Data Nascimento:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="data_nascimento" id="data_nascimento">
            </div>
        </div>



            <div class="text-center">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a class="btn btn-danger" href="/aluno">Voltar</a>
            </div>
    </form>
@endsection
