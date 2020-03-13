<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dever 17</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<h1>Exercicio 17</h1>

<form action="/ex17" method="post"> 
    @csrf
    
    <label for="nome">Nome Piloto:</label>
        <input type="text" name="nome" id="nome">
    <br>
    <label for="distpercorrida">Distancia percorrida:</label>
        <input type="text" name="distpercorrida" id="distpercorrida">
    <br>
    <label for="tempopercurso">Tempo percurso:</label>
        <input type="text" name="tempopercurso" id="tempopercurso">
    <br>
    <br>
        <button type="submit" class="btn btn-success">Enviar</button>
</form>
</body>
</html>