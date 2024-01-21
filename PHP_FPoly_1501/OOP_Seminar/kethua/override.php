<?php
//overriding (ghi đè)
class HinhChuNhat
{
    public $length;
    public $width;
    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }
}
class HinhVuong extends HinhChuNhat
{
    public function __construct($size)
    {
        $this->length = $size;
        $this->width = $size;
    }
}
$hinhVuong = new HinhVuong(4);
var_dump($hinhVuong);
