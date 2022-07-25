<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex002</title>
</head>
<body>
    <?php
    $atual = $_GET["aa"]; // esta linha vai pegar o ano da url
    echo("O ano atual é $atual<br>");
    echo("O ano anterior é ". --$atual);
    ?>
</body>
</html>