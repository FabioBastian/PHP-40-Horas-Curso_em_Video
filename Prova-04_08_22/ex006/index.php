<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>select gerados dinamicamente</title>
</head>
<body>
    <label for="op">Opção:</label>
    <select id="op" name="opcao">
    <?php
    $c = 0;
    while ($c <= 100){
        echo("<option value='$c'>$c%</option>");
        $c += 10;
    }
    ?>
    </select>
</body>
</html>