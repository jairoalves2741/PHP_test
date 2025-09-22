<?php
require_once __DIR__ . '/Person.php';
class Student extends Person
{
    //attibutes
    private String $ra;
    private string $course;

    //construct
    public function __construct(string $name, string $cpf, string $dt_birth, String $ra, string $course)
    {
        parent::__construct($name, $cpf, $dt_birth);

        $this->ra = $ra;
        $this->course = $course;
    }

    //disply method
    public function ViewInfoStudent()
    {
        parent::ViewInfo();
        echo "RA: " . $this->ra;
        echo "Curso: " . $this->course;
    }


}