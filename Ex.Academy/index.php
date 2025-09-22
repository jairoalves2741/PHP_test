<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD - ACADEMIA</title>
</head>

<body>
    <h1>SISTEMA DE ACADEMIA </h1>

    <?php
    require_once __DIR__ . "/Person.php";
    require_once __DIR__ . "/Runner.php";
    require_once __DIR__ . "/Swimmer.php";

    $runner1 = new Runner("Cláudio", "35", "10");
    echo "---------- Esteiras ----------<br>";
    $runner1->Viewrun();
    echo "<br>";


    $swinner1 = new Swimmer("Marcia", "30", "5");
    echo "---------- Piscina Atletica ---------<br>";
    $swinner1->Viewswim();

    ?>

</body>

</html>