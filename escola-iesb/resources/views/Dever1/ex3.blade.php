<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dever 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <h1>Exercício 3</h1>
    <br>

    <h2>Funcionário : Jairo Leal dos Santos</h2>

    <form action="/ex3" method="post">
        @csrf

        <label for="salariomensal">Salário Mensal:</label>
            <input type="text" name="salariomensal" id="salariomensal">
        <br>
        <label for="reajuste">Reajuste salário:</label>
            <input type="text" name="reajuste" id="reajuste">
        <br>
        <br>

        <button type="submit" class="btn btn-success">Enviar</button>

</body>
</form>

</html>