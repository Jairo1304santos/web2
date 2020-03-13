<h1>Exercicio 1</h1>

<h2>aluno: {{ $aluno }} </h2>
<h3>A media é: {{ $media }}</h3>

@if($media >= 7)
    <h3>O aluno está APROVADO</h3>
@else
    <h3>O aluno está REPROVADO</h3>
@endif
