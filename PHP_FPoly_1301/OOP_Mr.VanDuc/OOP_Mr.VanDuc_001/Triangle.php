<?php
require_once "ShapeInterface.php";
require_once "ShapeAbstract.php";
class Triangle extends ShapeAbstract implements ShapeInterface
{
    private $a;
    private $b;
    private $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function calculateArea()
    {
        $p = ($this->a + $this->b + $this->c) / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    }
    public function calculatePerimeter()
    {
        return $this->a + $this->b + $this->c;
    }
}
?>
