<?php
abstract class EmployeeAbstract
{
    protected $name;
    protected $id;
    protected $baseSalary;

    public function __construct($name, $id, $baseSalary)
    {
        $this->name = $name;
        $this->id = $id;
        $this->baseSalary = $baseSalary;
    }
    public function getName()
    {
        return $this->name;
    }

    public function getID()
    {
        return $this->id;
    }

    public function getBaseSalary()
    {
        return $this->baseSalary;
    }
    abstract public function calculateSalary();
    // Một số chức năng chung có thể được triển khai ở đây
    public function printDetails()
    {
        echo "<br>------------------------------------------------";
        echo "<br>Name: " . $this->getName() . "\n";
        echo "<br>ID: " . $this->getID() . "\n";
        echo "<br>Basic Salary: " . $this->getBaseSalary() . "\n";
        echo "<br>Salary: " . $this->calculateSalary() . "\n";
        echo "____________________________________________________";
    }
}
