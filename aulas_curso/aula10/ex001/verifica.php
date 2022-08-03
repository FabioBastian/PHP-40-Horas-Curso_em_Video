<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verifica op</title>
</head>
<body>
    <?php
    $num = !empty($_GET["num"]) ? $_GET["num"] : 0;
    $op = isset($_GET["op"]) ? $_GET["op"] : 0;
    switch ($op){
        case 0: 
            $r = $num * 2;
            break;
        case 1:
            $r = pow($num, 3);
            break;
        case 2:
            $r = sqrt($num); // $n ^ (1/2);
            break;
        default:
            $r = 0;
    }
    echo("O resultado da operação foi <strong>".number_format($r, 2, ",", ".")."</strong><br>")
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>