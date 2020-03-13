<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dever 9</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<h1>Exercicio 9</h1>

<form action="/ex9" method="post"> 
    @csrf
    
    <label for="num1">Número 1:</label>
        <input type="text" name="num1" id="num1">
    <br>
    <label for="num2">Número 2:</label>
        <input type="text" name="num2" id="num2">
        
    <br>
    <br>
        <button type="submit" class="btn btn-success">Enviar</button>
</form>
</body>
</html>