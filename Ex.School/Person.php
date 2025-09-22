<?php

class Person
{

    //attributes
    private $name;
    protected $cpf;
    private $dt_birth;

    //Construct
    public function __construct($name, $cpf, $dt_birth)
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->dt_birth = $dt_birth;
    }

    //method Setter
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setDtBirth($dt_birth): void
    {
        $this->dt_birth = $dt_birth;
    }

    //method Getter
    public function getName()
    {
        return $this->name;
    }

    public function getDtBirth()
    {
        return $this->dt_birth;
    }

    //comun method
    public function ViewInfo(): void
    {
        echo "Nome: " . $this->name;
        echo "CPF: " . $this->cpf;
        echo "Data de Nascimento" . $this->dt_birth;
    }
}