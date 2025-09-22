<?php

class Person
{
    //attibutes
    private $name;
    private $age;

    //access methods
    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }

    //construct
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    //common methods
    public function ViewInfo()
    {
        echo "Nome: " . $this->name . "<br>";
        echo "Idade: " . $this->age . "<br>";
    }



}