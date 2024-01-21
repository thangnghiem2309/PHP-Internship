<?php
require_once "ShapeInterface.php";
require_once "ShapeAbstract.php";
class Rectangle extends ShapeAbstract implements ShapeInterface
{
    private $width;
    private $length;
    public function __construct($width, $length)
    {
        $this->width = $width;
        $this->length = $length;
    }
    public function calculateArea()
    {
        return $this->width * $this->length;
    }
    public function calculatePerimeter()
    {
        return 2 * ($this->width + $this->length);
    }
}
?>
