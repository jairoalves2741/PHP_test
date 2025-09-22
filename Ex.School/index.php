<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BD - SCHOOL</title>
</head>

<body>
    <h1>GERNCIAMENTO ESCOLAR</h1>

    <?php
    require_once __DIR__ . '/Student.php';
    require_once __DIR__ . '/Employer.php';
    require_once __DIR__ . '/Teacher.php';
    require_once __DIR__ . '/Person.php';


    $teacher1 = new Teacher("Paulo Sergio<br>", "513.534.645-9<br>", "21/05/1965<br>", "Matematica<br>", "7654321<br>");
    echo"---------- PROFESSOR ---------- <br>";
    $teacher1->ViewInfoTeacher();
    echo "<br>";
    


    $employer1 = new Employer("Maria Inacio<br>", "596.689.695-9<br>", "15/05/1965<br>", "99887766<br>", "Cozinheira<br>");
    echo"---------- FUNCIONARIO ---------- <br>";
    $employer1->ViewInfoEmployer();
    echo "<br>";


    $student1 = new Student("Matheus Amorim<br>", "159.645.639-9<br>", "15/02/2000<br>", "45813671 - 9<br>", "Desenvolvimneto de Sistemas<br>");
    echo"---------- ESTUDANTE ---------- <br>";
    $student1->ViewInfoStudent();
    ?>
</body>

</html>