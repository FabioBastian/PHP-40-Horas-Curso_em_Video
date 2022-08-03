<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>criano caixas de texto dinamicamente</title>
</head>
<body>
    <form method="get" action="verifica.php">
        <?php
        $c = 1;
        while ($c <= 5) {
            echo("<label for='valor$c'>Valor $c: <input type='number' name='v$c' id='valor$c' min='0' max='100'></label><br>");
            $c ++;
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>