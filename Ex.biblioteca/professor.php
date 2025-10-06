<?php

require_once __DIR__ . "/biblioteca.php";
class professor extends biblioteca
{
    public function __construct($user, $book, $author, $year, $category, )
    {
        parent::__construct($user, $book, $author, $year, $category, );

    }

    public function Viewprofessor()
    {
        parent::ViewInfo();
        echo "Por ser professor, voce tem 30 dias para a devolução do Livro";

    }


}