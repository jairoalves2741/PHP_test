<?php

class Person
{

    //attributes
    public $name;
    public $cpf;
    public $dt_birth;

    //methods Setter
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setCpf($cpf): void
    {
        $this->cpf = $cpf;
    }

    public function setDtBirth($dt_birth): void
    {
        $this->dt_birth = $dt_birth;
    }


    //methods Getter
    public function getName()
    {
        return $this->name;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function getDtBirth()
    {
        return $this->dt_birth;
    }

    //Construct
    public function __construct($name, $cpf, $dt_birth)
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->dt_birth = $dt_birth;
    }








}