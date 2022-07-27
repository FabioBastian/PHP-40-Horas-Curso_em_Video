<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica</title>
</head>
<body>
    <?php
    $nome = $_GET["nome"] != null ? $_GET["nome"] : "[Não informado]";
    $ano = " " ? $_GET["ano"] : 0;
    $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[sexo não informado]";
    $idade = date("Y");
    echo("$nome um $sexo de $idade anos.");
    ?>
    <h2><a href="index.php">Voltar</a></h2>
</body>
</html>