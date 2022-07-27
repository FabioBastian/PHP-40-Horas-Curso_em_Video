<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula media</title>
</head>
<body>
    <?php
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1 + $nota2) / 2;
    echo("A media entre $nota1 e $nota2 é $m<br>");
    //$sit = $m < 7 ? "Reprovado" : "Aprovado";
    //echo("O aluno está: $sit<br>")
    echo("O aluno está: ".($m < 7 ? "reprovado" : "aprovado"))
    ?>
</body>
</html>