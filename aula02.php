<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - POO PHP</title>
</head>
<body>
    <pre>

    <?php

        require_once 'Caneta.php';
        $c1 = new Caneta;
        $c1->modelo = "BIC cristal";
        $c1->cor = "Azul";
        print_r($c1);
        
        $c1->rabiscar();
        $c1->tampar();

    
    ?>
    </pre>

</body>
</html>