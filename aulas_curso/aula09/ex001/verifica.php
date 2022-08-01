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
    echo("Voce nasceu em $a e terá $i anos<br>");
    if ($i >= 18){
        $v = "ja pode votar";
        $d = "ja pode dirigir";
    }else{
        $v = "não pode votar";
        $d = "não pode dirigir";
    }
    echo("Com essa idade voce $v e tambem $d");
    ?>
</body>
</html>