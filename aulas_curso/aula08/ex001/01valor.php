<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador</title>
</head>
<body>
    <?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo("O valor enviado foi de $valor<br>");
    echo("A raiz de $valor é ".number_format($rq, 2)."<br>");
    ?>
    <h3><a href="index.php">Voltar</a></h3>
</body>
</html>