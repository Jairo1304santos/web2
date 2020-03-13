<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dever 5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>

    <h1>Exercício 5</h1>
    <br>

    <h2>Vendas</h2>

    <form action="/ex5" method="post">
        @csrf

        <label for="custofabrica">Custo de Fábrica:</label>
            <input type="text" name="custofabrica" id="custofabrica">
        
        <br>
        <label for="distribuidor">Distribuidor:</label>
            <input type="text" name="distribuidor" id="distribuidor">
        
        <br>
        <label for="imposto">Imposto:</label>
            <input type="text" name="imposto" id="imposto">
        
        <br>
        <br>

        <button type="submit" class="btn btn-success">Enviar</button>

</body>
</form>

</html>