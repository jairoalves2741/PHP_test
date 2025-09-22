<?php
require_once __DIR__ . "/Person.php";

class Runner extends Person
{
    //attributes
    private $running_distance;

    //access methods
    public function getRunningDistance()
    {
        return $this->running_distance;
    }
    public function setRunningDistance($running_distance): void
    {
        $this->running_distance = $running_distance;
    }

    //construct
    public function __construct($name, $age, $running_distance)
    {
        parent::__construct($name, $age);
        $this->running_distance = $running_distance;
    }

    //common method
    public function Viewrun()
    {
        $this->ViewInfo();
        echo $this->getName() . " está correndo.<br>";
        echo "Distância percorrida: " . $this->getRunningDistance() . " km.<br>";
    }
}