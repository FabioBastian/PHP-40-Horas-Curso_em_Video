<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verifica Estados</title>
</head>
<body>
    <?php
    $est = $_GET["estado"];
    switch ($est) {
        case "GO":
        case "MT":
        case "MS":
        case "DF":
            $reg = "Centro-Oeste";
            break;
        
        case "AC":
        case "AM":
        case "AP":
        case "PA":
        case "RO":
        case "RR":
        case "TO":
            $reg = "Norte";
            break;
        
        case "AL":
        case "BA":
        case "CE":
        case "MA":
        case "PI":
        case "PE":
        case "PB":
        case "RN":
        case "SE":
            $reg = "Nordeste";
            break;
        
        case "PR":
        case "RS":
        case "SC":
            $reg = "Sul";
            break;
        
        case "ES":
        case "MG": 
        case "RJ":
        case "SP":
            $reg = "Sudeste";
            break;
    }
    echo("Voce mora na Região <strong> $reg </strong><br>");
    ?>
    <a href="index.php" value="Voltar"></a>
</body>
</html>