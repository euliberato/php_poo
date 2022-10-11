<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <pre>
    <?php

        require_once 'Caneta04.php';
        $c1 = new Caneta("BIC", "Azul", 0.5);
        print_r($c1);

        echo "<br>";

        $c2 = new Caneta("TIC", "Vermelho", 1.0);
        print_r($c2);

    ?>
    </pre>
</div>
</body>
</html>