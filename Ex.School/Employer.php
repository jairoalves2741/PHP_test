<?php
require_once __DIR__ . '/Person.php';
class Employer extends Person
{
    //attirbute in Employer
    private String $rgm;
    private string $position;

    //construct
    public function __construct(string $name, string $cpf, string $dt_birth, String $rgm, string $position)
    {
        parent::__construct($name, $cpf, $dt_birth);

        $this->rgm = $rgm;
        $this->position = $position;
    }


    //display method
    public function ViewInfoEmployer()
    {
        parent::ViewInfo();
        echo "RGM (Registro Geral de Matrícula): " . $this->rgm;
        echo "Cargo: " . $this->position;
    }
}