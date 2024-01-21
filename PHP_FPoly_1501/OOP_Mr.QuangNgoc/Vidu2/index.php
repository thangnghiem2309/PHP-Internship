<?php
require_once "./bankInterface.php";
require_once "./BankAbstract.php";
require_once "./HBBank.php";

//Tạo đối tượng
$user1 = new HBBank("Nguyễn Văn Dũng", "0102032104", 10000000);
$user2 = new HBBank("Nguyễn Văn Duy", "010432182", 100000);

$user1->chuyentien(5000000, $user2);
echo "<br>số dư trong tài khoản của  $user2->hoten là $user2->sodu";
echo "<br>--------------------------------------------------------";

$user3 = new ViettinBank("Nguyễn Văn Đức", "0102342104", 10000000);
$user4 = new ViettinBank("Nguyễn Văn Hùng", "010562182", 100000);
$user3->chuyentien(5000000, $user4);
    // $user3 -> guitien(1000000);
