<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Personalizavel</title>
</head>
<body>
    <form method= "get" action="verifica.php">
        <label for="inicio">Inicio: <input type="number" name="ini" id="inicio"></label><br>
        <label for="fim">Fim: <input type="number" name="fim" id="fim"></label><br>
        <label for="opcao">Opção: </label>
        <select name="op" id="opcao">
            <option value="1">De 1 em 1</option>
            <option value="2">De 2 em 2</option>
            <option value="3">De 3 em 3</option>
            <option value="4">De 4 em 4</option>
            <option value="5">De 5 em 5</option>
            <option value="6">De 6 em 6</option>
            <option value="7">De 7 em 7</option>
            <option value="8">De 8 em 8</option>
            <option value="9">De 9 em 9</option>
            <option value="10">De 10 em 10</option>
        </select><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>