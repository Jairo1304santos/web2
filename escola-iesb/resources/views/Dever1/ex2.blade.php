<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dever 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <h1>Exercício 2</h1>
    <br>

    <form action="/ex2" method="post">
        @csrf

        <label for="totaleleitores">Tototal Eleitores:</label>
            <input type="text" name="total" id="totaleleitores"> 
            <br>
        <label for="votosbrancos">Votos Brancos:</label>
            <input type="text" name="brancos" id="votosbrancos"> 
            <br>
        <label for="votosnulos">Votos Nulos:</label>
            <input type="text" name="nulos" id="votosnulos"> 
            <br>
        <label for="votosvalidos">Votos Válidos:</label>
            <input type="text" name="validos" id="votosvalidos"> 
            <br>
        <br>

        <button type="submit" class="btn btn-success">Enviar</button>

</body>
    </form>
</html>