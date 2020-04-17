@extends('templates.default')

@section('conteudo')

    <h1>Disciplina</h1>
    <h1>Disciplina</h1>

    <form action="/disciplina" method="post">
        @csrf

        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
        </div>

        <div class="form-group row"> 
            <label for="curso_id" class="col-sm-2 col-form-label">Curso</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="curso_id" id="curso_id">
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a class="btn btn-danger" href="/disciplina">Voltar</a>
        </div>
    </form>
@endsection
