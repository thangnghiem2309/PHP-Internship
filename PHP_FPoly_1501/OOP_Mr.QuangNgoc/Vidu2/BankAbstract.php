<?php
abstract class BankAbstract
{
    public $hoten;
    public $sotk;
    public $sodu;
    public function __construct($hoten, $sotk, $sodu)
    {
        $this->hoten = $hoten;
        $this->sotk = $sotk;
        $this->sodu = $sodu;
    }
    public abstract function napTien($sotien);
    public abstract function rutTien($sotien);
    public abstract function chuyenTien($sotien, $nguoinhan);
}

