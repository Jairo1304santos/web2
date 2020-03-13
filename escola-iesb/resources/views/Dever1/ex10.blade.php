<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dever 10</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<h1>Exercicio 10</h1>
<br>
<h2>controle de peça</h2>

<form action="/ex10" method="post"> 
    @csrf
    
    <label for="qtdminima">Quantidade Mínima:</label>
        <input type="text" name="qtdminima" id="qtdminima"/>
    <br>
    <label for="qtdmaxima">Quantidade Máxima:</label>
        <input type="text" name="qtdmaxima" id="qtdmaxima"/>
    <br>
    <br>
        <button type="submit" class="btn btn-success">Enviar</button>
</form>
</body>
</html>