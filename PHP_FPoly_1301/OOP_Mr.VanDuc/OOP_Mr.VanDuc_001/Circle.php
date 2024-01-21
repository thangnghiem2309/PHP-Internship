<?php
    require_once "ShapeInterface.php";
    require_once "ShapeAbstract.php";
    class Circle extends ShapeAbstract implements ShapeInterface
    {
        private $radius;
        public function __construct($radius)
        {
            $this-> radius = $radius;
        }
        public function calculateArea()
        {
            return pi() * pow($this -> radius, 2);
        }
        public function calculatePerimeter()
        {
            return pi() * 2 * $this -> radius;
        }
    }
?>