<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dever 11</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<h1>Exercicio 11</h1>

<form action="/ex11" method="post"> 
    @csrf
    
    <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"/>
    <br>
    
    <label for="numhrtra">N° Hora:</label>
        <input type="text" name="numhrtra" id="numhrtra"/>
    <br>

    <label for="valorhora">Valor hora:</label>
        <input type="text" name="valorhora" id="valorhora"/>
    <br>
    
    <label for="numfilho">N° Filho(s):</label>
        <input type="text" name="numfilho" id="numfilho"/>
    <br>
    <br>
        <button type="submit" class="btn btn-success">Enviar</button>
</form>
</body>
</html>