<?php

require_once __DIR__ . '/Person.php';

class Teacher extends Person
{

    private string $rf;
    private string $discipline;

    public function __construct(string $name, string $cpf, string $dt_birth, string $discipline, String $rf)
    {
        parent::__construct($name, $cpf, $dt_birth);

        $this->rf = $rf;
        $this->discipline = $discipline;
    }

    public function ViewInfoTeacher()
    {
        parent::ViewInfo();
        echo "Disciplina: " . $this->discipline;
        echo "RF(Registro Funcional): " . $this->rf;

    }
}

