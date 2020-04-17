
<html>
<head>
    <title>Projeto Escola</title>
    <link rel="stylesheet" href="{{asset('js/bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('js/fontawesome/css/all.css')}}">
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Projeto Escola</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/curso">Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/disciplina">Disciplinas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/aluno">Alunos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/professor">Professores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/turma">Turmas</a>
            </li>
        </ul>
    </div>
</nav>

<main class="container" style="..." >
    @yield('conteudo')
</main>
</body>
</html>
