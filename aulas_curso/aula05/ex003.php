<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções aritmeticas</title>
</head>
<body>
    <?php
    $n1 = $_GET["x"];
    $n2 = $_GET["y"];
    echo("Valores recebidos $n1 e $n2<br>");
    echo("O valor absoluto de $n2 é ".abs($n2)."<br>");
    echo("O valor de $n1<sup>$n2</sup> é ".pow($n1, $n2)."<br>");
    echo("A raiz de $n1 é ".sqrt($n1)."<br>");
    echo("O valor de $n2 arredondado é ".floor($n2)."<br>");
    echo("A parte inteira de $n2 é ".intval($n2)."<br>");
    echo("O valor de $n1 é R$".number_format($n2, 2, ",", "."))
    ?>
</body>
</html>