<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula obrigatoriedade voto</title>
</head>
<body>
    <?php
    $ano = $_GET["an"];
    $idade = 2022 - $ano;
    echo("Quem nasceu em $ano tem idade de $idade anos<br>");
    $tipo = ($idade >= 18 && $idade<65) ? "OBRIGATORIO" : "NÃO OBRIGATORIO";
    echo("E desta forma o seu voto é $tipo<br>")
    ?>
</body>
</html>