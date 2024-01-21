<?php
require_once "EngineerInterface.php";
require_once "EmployeeAbstract.php";
class Engineer extends EmployeeAbstract implements EngineerInterface
{
    private $experienceYears;

    public function __construct($name, $id, $baseSalary, $experienceYears)
    {
        parent::__construct($name, $id, $baseSalary);
        $this->experienceYears = $experienceYears;
    }

    public function calculateSalary()
    {
        $experienceBonus = $this->experienceYears * 1000;
        return $this->baseSalary + $experienceBonus;
    }

    public function doEngineeringWork()
    {
        echo "<br>Engineer is doing engineering work.";
    }
}
