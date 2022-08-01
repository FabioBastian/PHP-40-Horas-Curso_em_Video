<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verifica idade</title>
</head>
<body>
    <?php
    $a = !empty($_GET["ano"]) ? $_GET["ano"] : 0 ;
    $i = date("Y") - $a;
    if ($i < 16){
        $tipoVoto = "não vota";
    }else if ($i >= 16 && $i < 18 || $i > 65){
        $tipoVoto = "voto opcional";
    }else{
        $tipoVoto = "voto obrigatorio";
    }
    echo("Para a idade de $i anos, $tipoVoto<br>");
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>