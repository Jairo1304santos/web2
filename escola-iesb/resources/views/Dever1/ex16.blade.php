<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dever 16</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<h1>Exercicio 16</h1>

<form action="/ex16" method="post"> 
    @csrf
    
    <label for="nome">Vendedor:</label>
        <input type="text" name="nome" id="nome">
    <br>
    <label for="salariofixo">Salário Fixo:</label>
        <input type="text" name="salariofixo" id="salariofixo">
    <br>
    <label for="valortotalvendas">Valor Total vendas R$:</label>
        <input type="text" name="valortotalvendas" id="valortotalvendas">
        
    <br>
    <label for="percentvendas">Comissão Vendas</label>
        <input type="text" name="percentvendas" id="percentvendas">
    <br>
    <br>
        <button type="submit" class="btn btn-success">Enviar</button>
</form>
</body>
</html>