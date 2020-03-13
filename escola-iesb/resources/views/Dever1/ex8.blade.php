<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dever 8</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<h1>Exercicio 8</h1>

<form action="/ex8" method="post"> 
    @csrf
    
    <label for="raio">Raio:</label>
        <input type="text" name="raio" id="raio">
    <br>
    <label for="altura">Altura:</label>
        <input type="text" name="altura" id="altura">
        
    <br>
    <br>
        <button type="submit" class="btn btn-success">Enviar</button>
</form>
</body>
</html>