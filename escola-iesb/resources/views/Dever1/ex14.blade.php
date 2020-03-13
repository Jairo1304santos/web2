<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dever 14</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<h1>Exercicio 14</h1>

<form action="/ex14" method="post"> 
    @csrf
    
    <label for="nota1">Nota 1:</label>
        <input type="text" name="nota1" id="nota1"/>
    <br>
    
    <label for="nota2">Nota 2:</label>
        <input type="text" name="nota2" id="nota2"/>
    <br>
    <label for="nota3">Nota 3:</label>
        <input type="text" name="nota3" id="nota3"/>
    <br>
    <br>
        <button type="submit" class="btn btn-success">Enviar</button>
</form>
</body>
</html>