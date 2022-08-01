<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    $txt = !empty($_GET["t"]) ? $_GET["t"] : "[Texto generico]";
    $tam = isset($_GET["tam"]) ? $_GET["tam"] : "12pt";
    $cor = isset($_GET["cor"]) ? $_GET["cor"] : "[Cor generica]";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor ?>;
        }
    </style>
</head>
<body>
    <?php
    echo("<span class='texto'>$txt</span><br>");
    ?>
    <a href="index.php">Voltar</a>
</body>
</html>