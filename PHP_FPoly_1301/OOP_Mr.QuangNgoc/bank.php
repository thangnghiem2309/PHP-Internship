<?php
    abstract class BankAbstract{
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
        public abstract function chuyentien($sotien, $nguoinhan);
        
    }
    class HBBank extends BankAbstract{
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
    }
    $user1 = new HBBank("Nguyễn Văn Dũng", "0102032104", 10000000);
    $user2 = new HBBank("Nguyễn Văn Duy", "010432182", 100000);
    $user1 ->chuyentien(5000000, $user2);
    echo "<br>số dư trong tài khoản của  $user2->hoten là $user2->sodu";
?>