<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dever 13</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <h1>Exercicio 13</h1>

    <form action="/ex13" method="post">
        @csrf

        <label for="dia">Dia(s):</label>
        <input type="text" name="dia" id="dia" />
        <br>
        <br>
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
</body>

</html>