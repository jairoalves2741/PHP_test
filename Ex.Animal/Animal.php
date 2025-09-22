<?php

class Animal
{
    //attibutes
    private $name;
    private $age;
    private $species;

    //access methods
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function setSpecies($species): void
    {
        $this->species = $species;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getSpecies()
    {
        return $this->species;
    }


    //construct
    public function __construct($name, $age, $species)
    {
        $this->name = $name;
        $this->age = $age;
        $this->species = $species;
    }

    //communs methods
    public function ViewInfo()
    {
        echo "Nome: " . $this->name . '<br>';
        echo "Idade: " . $this->age .'<br>';
        echo "Espécie: " . $this->species . '<br>';
    }

    public function human_age_Lion($age)
    {
        $result = $age * 4;
        return $result;
    }

    public function human_age_Elephant($age)
    {
        $result = $age * 3;
        return $result;
    }

}
