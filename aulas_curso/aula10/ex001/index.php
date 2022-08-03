<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desisão calcular</title>
</head>
<body>
    <form method="get" action="verifica.php">
        <label for="numero">Numero: <input type="number" name="num" id="numero"></label> <br>
        <select name="op" id="iop">
            <option value="0">Dobro</option>
            <option value="1">Cubo</option>
            <option value="2">Raiz Quadrada</option>
        </select> <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>