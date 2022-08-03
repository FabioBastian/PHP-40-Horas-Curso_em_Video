<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verifica media</title>
</head>
<body>
    <?php
    $n1 = !empty($_GET["n1"]) ? $_GET["n1"] : 0;
    $n2 = !empty($_GET["n2"]) ? $_GET["n2"] : 0;
    $med = ($n1 + $n2) / 2;

    if ($med >=7){
        $sit = "aprovado";
    }else if ($med > 7 || $med >= 5){
        $sit = "recuperação";
    }else{
        $sit = "reprovado";
    }

    echo("A media entre as notas $n1 e $n2 é $med<br>");
    echo("A situação do aluno é $sit")

    ?>
    <br><a href="index.php">Voltar</a>
</body>
</html>