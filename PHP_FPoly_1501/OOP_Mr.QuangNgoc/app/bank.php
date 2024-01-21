<?php
    namespace App;//chữ đầu phải viết hoa
    class bank{//tên class trùng tên file
        public $hoten;
        public $sotk;
        public $sodu;
        public function __construct($hoten, $sotk, $sodu){
            $this->hoten = $hoten;
            $this->sotk = $sotk;
            $this->sodu = $sodu;
        }
        public function ruttien($sotien){
            if($sotien < $this->sodu)
            {
                $this -> sodu -= $sotien;
                echo "<br>$this->hoten vừa thực hiện rút tiền thành công";
                echo "<br>số dư trong tài khoản là $this->sodu";
            }
        }
        public function chuyentien($sotien, $nguoinhan)
        {
            if($sotien < $this->sodu)
            {
                $this -> sodu -= $sotien;
                $nguoinhan -> sodu += $sotien;
                echo "<br>$this->hoten vừa thực hiện chuyển tiền thành công tới $nguoinhan->hoten số tiền $sotien";
                echo "<br>số dư trong tài khoản là $this->sodu";
            }
            else
            {
                echo"Số dư tài khoản không đủ";
            }
        }
        public function guiTien($sotien)
        {
            $this -> sodu += $sotien;

            echo"<br>Tài khoản của bạn vừa được cộng thêm $sotien";
            echo"<br>Số dư tài khoản là: " .$this -> sodu;
        }
    }
?>