<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form method="get" action="02idade.php">
        <label>Nome: <input type="text" name="nome"></label>
        <label>Ano nascimento: <input type="number" name="ano"></label>
        <fieldset>
            <legend>Sexo: </legend>
            <input type="radio" name="sexo" id="masc" value="homem">
            <label for="masc">Masculino</label>
            <input type="radio" name="sexo" id="fem" value="mulher">
            <label for="fem">Feminino</label>
        </fieldset>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>