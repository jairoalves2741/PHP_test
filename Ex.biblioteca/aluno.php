<?php

require_once __DIR__ . "/biblioteca.php";
class aluno extends biblioteca
{
    public function __construct($user, $book, $author, $year, $category, )
    {
        parent::__construct($user, $book, $author, $year, $category, );

    }

    public function Viewaluno()
    {
        parent::ViewInfo();
        echo "Por ser aluno, voce tem 10 dias para a devolução do Livro";

    }

}