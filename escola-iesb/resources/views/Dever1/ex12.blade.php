<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dever 12</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<h1>Exercicio 12</h1>

<form action="/ex12" method="post"> 
    @csrf
    
    <label for="idade">Idade:</label>
        <input type="text" name="idade" id="idade"/>
    <br>
    
    <label for="mes">Mês:</label>
        <input type="text" name="mes" id="mes"/>
    <br>
    
    <label for="dia">Dia(s):</label>
        <input type="text" name="dia" id="dia"/>
    <br>
    <br>
        <button type="submit" class="btn btn-success">Enviar</button>
</form>
</body>
</html>