<?php
require_once "ShapeInterface.php";
require_once "ShapeAbstract.php";
require_once "Circle.php";
require_once "Rectangle.php";
require_once "Triangle.php";
echo "<pre>";
echo "Circle: ";
$Circle = new Circle(5);
$Circle->printDetails();

echo "<br>Rectangle: ";
$Rectangle = new Rectangle(5, 5);
$Rectangle->printDetails();

echo "<br>Triangle: ";
$Triangle = new Triangle(3, 4, 5);
$Triangle->printDetails();
