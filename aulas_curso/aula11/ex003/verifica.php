<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetição e verificação</title>
</head>
<body>
    <?php
    $ini = !empty($_GET["ini"]) ? $_GET["ini"] : 0;
    $fim = !empty($_GET["fim"]) ? $_GET["fim"] : 0;
    $op = isset($_GET["op"]) ? $_GET["op"] : 0;
    if ($fim >= $ini){
        while ($fim >= $ini){
            echo("$ini ");
            $ini += $op;
            $v = "Sobrou ".($op + ($fim - $ini) );
        }
    }else{
        while($ini >= $fim){
            echo("$ini ");
            $ini -= $op;
            $v = "Sobrou ".($op + ($ini - $fim) );
        }
    }
    echo(($fim - $ini == 0) ? "<br>Não sobrou" : "<br>".$v);
    ?>
    <a href="index.php"><br>Voltar</a>
</body>
</html>