<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavel de variavel</title>
</head>
<body>
    <?php
    $x = "abc";
    $$x = "def";
    echo("O conteudo da variavel X é $x<br>");
    echo("A variavel ABC recebeu o valor de $abc");
    ?>
</body>
</html>