<?php
require_once "ManagerInterface.php";
require_once "EmployeeAbstract.php";
class Manager extends EmployeeAbstract implements ManagerInterface
{
    private $bonus;

    public function __construct($name, $id, $baseSalary, $bonus)
    {
        parent::__construct($name, $id, $baseSalary);
        $this->bonus = $bonus;
    }

    public function calculateSalary()
    {
        return $this->baseSalary + $this->bonus;
    }

    public function manageTeam()
    {
        echo "<br>Manager is managing the team.";
    }
}
