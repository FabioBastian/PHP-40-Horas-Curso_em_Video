<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flores</title>
</head>
<body>
    <?php
    function margarida($flores){
        $c = 0;
        foreach ($flores as $flor) {
            if ($flor == "margarida"){
                $c++;
            }
        }
        return $c;
    }
    $buque[] = "rosa";
    $buque[] = "margarida";
    $buque[] = "rosa";
    $buque[] = "cravo";
    $buque[] = "margarida";
    $buque[] = "cravo";
    $buque[] = "margarida";
    $buque[] = "rosa";
    echo margarida($buque); // 3
    ?>
</body>
</html>