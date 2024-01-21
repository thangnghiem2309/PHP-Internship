<?php
    interface bankInterface{
        public function ruttien($sotien);
        public function chuyentien($sotien, $nguoinhan);
    }
    class ViettinBank implements bankInterface{
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
    $user3 = new ViettinBank("Nguyễn Văn Đức", "0102342104", 10000000);
    $user4 = new ViettinBank("Nguyễn Văn Hùng", "010562182", 100000);
    $user3 -> chuyentien(5000000, $user4);
    $user3 -> guitien(1000000);
?>