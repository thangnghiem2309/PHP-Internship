<?php
abstract class ShapeAbstract
{
    abstract public function calculateArea();
    abstract public function calculatePerimeter();
    // Một số chức năng chung có thể được triển khai ở đây
    public function printDetails()
    {
        echo "<br>Area: " . $this->calculateArea() . "\n";
        echo "<br>Perimeter: " . $this->calculatePerimeter() . "\n";
        echo "____________________________________________________";
    }
}
?>
