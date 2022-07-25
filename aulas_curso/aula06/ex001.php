<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operações de atribuição</title>
</head>
<body>
    <?php
    $preco = $_GET["p"];
    echo("O preço recebido é de R$ ".number_format($preco, 2)."<br>");
    $preco += $preco*10/100;
    echo("O novo preco com 10% de aumento é R$ ".number_format($preco, 2));
    ?>
</body>
</html>