<?php
class BaseBank
{
    protected $hoten;
    protected $soTK;
    protected $soDu;
    public function __construct($hoten, $soTK, $soDu)
    {
        $this -> hoten = $hoten;
        $this -> soTK = $soTK;
        $this -> soDu = $soDu;
    }

    // Hàm setSoDu dùng để cài đặt lại giá trị cho thuộc tính soDu
    public function setSoDu($sotien)
    {
        $this -> soDu = $sotien;
    }

    //Hàm getSoDu dùng để lấy số dư
    public function getSoDu()
    {
        return $this -> soDu;
    }
    public function thongtinTK()
    {
        echo "Họ tên: " .$this -> hoten;
        echo "<br>Số tài khoản: ".$this -> soTK;
        echo "<br>Số dư: ". $this -> soDu;
    }
}