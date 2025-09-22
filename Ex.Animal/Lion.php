<?php
require_once __DIR__ . "/Animal.php";

class Lion extends Animal
{

    //attributes
    private $mane_size;//tamanho da juda

    //access methods
    public function getManeSize()
    {
        return $this->mane_size;
    }

    public function setManeSize($mane_size): void
    {
        $this->mane_size = $mane_size;
    }

    //construct
    public function __construct($name, $age, $species, $mane_size)
    {
        parent::__construct($name, $age, $species);
        $this->mane_size = $mane_size;
    }

    //common method
    public function ViewLion()
    {
        $this->ViewInfo();
        echo "O leão está rugindo" . "<br>";
        echo "Idade convertida para humanos: " . $this->human_age_Lion($this->getAge()) . "<br>";

    }
}