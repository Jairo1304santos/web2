@extends('templates.default')

@section('conteudo')

    <h1>Curso</h1>
    <h1>Curso</h1>

    <form action="/curso" method="post">
        @csrf

        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
        </div>

        <div class="form-group row">
            <label for="duracao" class="col-sm-2 col-form-label">Duração:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="duracao" id="duracao">
            </div>
        </div>


            <div class="text-center">
                <button type="submit" class="btn btn-success">Salvar</button>
                <a class="btn btn-danger" href="/curso">Voltar</a>
            </div>
    </form>
@endsection
