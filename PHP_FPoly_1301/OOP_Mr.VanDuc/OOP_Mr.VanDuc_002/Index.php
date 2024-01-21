<?php
require_once "ManagerInterface.php";
require_once "EngineerInterface.php";
require_once "SalespersonInterface.php";
require_once "EmployeeAbstract.php";
require_once "Manager.php";
require_once "Engineer.php";
require_once "Salesperson.php";

echo "<pre>";

$manager = new Manager("John Doe", "M001", 5000, 2000);
echo "Manager\n";

$manager->manageTeam();
$manager->printDetails();

$engineer = new Engineer("Jane Smith", "E001", 4000, 5);
echo "\nEngineer\n";

$engineer->doEngineeringWork();
$engineer->printDetails();

$salesperson = new Salesperson("Bob Johnson", "S001", 3000, 100000, 0.05);
echo "\nSalesperson\n";

$salesperson->makeSales();
$salesperson->printDetails();

?>