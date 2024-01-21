<?php
require_once "./BaseBank.php";
require_once "./TPBank.php";

$account1 = new BaseBank("Nguyễn Văn Anh", "0333123", 0);
$account2 = new TPBank("Trần Văn Hải", "099933312", 20000000);
// $account1 ->setSoDu(2000000);
// $account1 -> soDu = 2000000;


$account2->chuyenTien(1500000, $account1);
echo "<br>";
$account1->thongtinTK();
