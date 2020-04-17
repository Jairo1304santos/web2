@extends('templates.default')

@section('conteudo')

    <h1>Turma</h1>
    <h1>Turma</h1>

    <form action="/turma" method="post">
        @csrf

        <div class="form-group row">
            <label for="disciplina_id" class="col-sm-2 col-form-label">Disciplina_id:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="disciplina_id" id="disciplina_id">
            </div>
        </div>

        <div class="form-group row">
            <label for="tutor_id" class="col-sm-2 col-form-label">Tutor:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="tutor_id" id="tutor_id">
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a class="btn btn-danger" href="/turma">Voltar</a>
        </div>
    </form>
@endsection
