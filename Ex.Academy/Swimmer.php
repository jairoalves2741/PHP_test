<?php
require_once __DIR__ . "/Person.php";

class Swimmer extends Person
{

    //attribute
    private $back_pool;

    //access methods
    public function getBackPool()
    {
        return $this->back_pool;
    }

    public function setBackPool($back_pool): void
    {
        $this->back_pool = $back_pool;
    }

    //construct
    public function __construct($name, $age, $back_pool)
    {
        parent::__construct($name, $age);
        $this->back_pool = $back_pool;
    }

    //common method
    public function Viewswim()
    {
        $this->ViewInfo();
        echo $this->getName() . " está nadando.<br>";
        echo "Voltas concluidas: " . $this->getBackPool() . "<br>";
    }

}