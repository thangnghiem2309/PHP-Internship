<?php
require_once "SalespersonInterface.php";
require_once "EmployeeAbstract.php";
class Salesperson extends EmployeeAbstract implements SalespersonInterface
{
    private $salesAchieved;
    private $commissionRate;

    public function __construct($name, $id, $baseSalary, $salesAchieved, $commissionRate)
    {
        parent::__construct($name, $id, $baseSalary);
        $this->salesAchieved = $salesAchieved;
        $this->commissionRate = $commissionRate;
    }

    public function calculateSalary()
    {
        $commission = $this->salesAchieved * $this->commissionRate;
        return $this->baseSalary + $commission;
    }

    public function makeSales()
    {
        echo "<br>Salesperson is making sales.";
    }
}
