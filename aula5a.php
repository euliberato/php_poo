<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php

        require_once 'aula5b.php';

        $p1 =  new contaBanco();  //Marquin
        $p2 =  new contaBanco();  //Joaninha

        $p1->abrir("CC");
        $p1->setDono('Marquin');
        $p2->abrir("CP");
        $p2->setDono('Joaninha');
        $p1->setConta(1111);
        $p2->setConta(2222);
        $p1->depositar(300);
        $p2->depositar(500);
        $p1->sacar(50);
        $p2->sacar(90);

        print_r($p1);
        echo "<br>";
        print_r($p2);

    ?>
    </pre>
</body>
</html>