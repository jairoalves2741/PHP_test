<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD - SISTEMAS ZOOLÓGICO</title>
</head>

<body>
    <h1>SISTEMAS ZOOLÓGICO</h1>
    <?php
    require_once __DIR__ . "/Animal.php";
    require_once __DIR__ . "/Elephant.php";
    require_once __DIR__ . "/Lion.php";

    echo "---------- LEÕES ----------" . "<br>";
    $lion1 = new lion("Lyron", "8", 'Leão-asiático', '30cm');
    $lion1->ViewLion();
    echo '<br>';

    $lion2 = new lion('Liro', '9', "Leão-africano", '40cm');
    $lion2->ViewLion();
    echo '<br>' . '<hr>';

    echo '---------- ELEFANTES ----------' . "<br>";
    $elephant1 = new Elephant('Amora', '10', 'Elefante-indiano', '2m');
    $elephant1->ViewElephant();
    echo '<br>';

    $elephant2 = new Elephant('Morgana', '5', 'Elefante-africano', '1,10m');
    $elephant2->ViewElephant();
    echo '<br>' . '<hr>';

    ?>

</body>

</html>