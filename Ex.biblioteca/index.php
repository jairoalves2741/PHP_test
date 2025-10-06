<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Virtual</title>
</head>

<body>
    <h1>SISTEMA DE BIBLIOTECA VIRTUAL</h1>
    <?php
    require_once __DIR__ . "/biblioteca.php";
    require_once __DIR__ . "/aluno.php";
    require_once __DIR__ . "/professor.php";

    echo "<hr>";
    $a1 = new aluno("Mauro Henrique", "Amados & Odiados", 'Afonso Lima', '2002', 'Romance');
    $a1->Viewaluno();

    echo "<hr>";
    $p1 = new professor('Henrique Mator', 'Orgulho do Insensato ', 'Maria Queiroz', '2001', 'Ficção');
    $p1->Viewprofessor();


    ?>
</body>

</html>