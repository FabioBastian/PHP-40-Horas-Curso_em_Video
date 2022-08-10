<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica numeros</title>
</head>
<body>
    <?php
    $i = 1;
    $n = 0;
    while ($i <= 5) {
        $n += !empty($_POST["v".$i]) ? $_POST["v".$i] : 0;
        $i++;

    }
    echo("A soma é $n");
    ?>
</body>
</html>