<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica dia semana</title>
</head>
<body>
    <?php
    $ds = !empty($_GET["ds"]) ? $_GET["ds"] : 0;
    switch ($ds) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo("Levante e vá estudar.<br>");
            break;
        
        case 7:
        case 8:
            echo("descanse pequeno gafanhoto.<br>");
            break;
        default:
            echo("Dia da semana invalido<br>");
            break;
    }
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>