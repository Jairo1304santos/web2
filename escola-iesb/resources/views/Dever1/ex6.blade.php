<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dever 6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<h1>Exercicio 6</h1>

<form action="/ex6" method="post"> 
    @csrf
    
    <label for="numcarrovendido">Carros vendidos:</label>
        <input type="text" name="numcarrovendido" id="numcarrovendido">
    <br>
    <label for="valortotalvendas">Valor Total vendas R$:</label>
        <input type="text" name="valortotalvendas" id="valortotalvendas">
        
    <br>
    <label for="salariofixo">Salário fixo:</label>
        <input type="text" name="salariofixo" id="salariofixo">
    <br>
    <br>
        <button type="submit" class="btn btn-success">Enviar</button>
</form>
</body>
</html>