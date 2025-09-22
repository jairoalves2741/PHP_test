<?php
require_once __DIR__ . "/Animal.php";

class Elephant extends Animal
{

    //attributes
    private $trunk_length;  //comprimento de tromba

    //access methods
    public function getTrunkLength()
    {
        return $this->trunk_length;
    }

    public function setTrunkLength($trunk_length): void
    {
        $this->trunk_length = $trunk_length;
    }

    //construct
    public function __construct($name, $age, $species, $trunk_length)
    {
        parent::__construct($name, $age, $species);
        $this->trunk_length = $trunk_length;

    }

    //common method
    public function ViewElephant()
    {
        $this->ViewInfo();
        echo "O Elefante está trombetando" . "<br>";
        echo "idade convertida para humanos: " . $this->human_age_Elephant($this->getAge()) . "<br>";
    }





}