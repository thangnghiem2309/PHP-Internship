<?php
// require_once "./app/bank.php";
// require_once "./app/ConNguoi.php";
// require_once "./app/NguoiLon.php";
// use App\bank;
// // use App\NguoiLon;
// $user1 = new bank("Nguyễn Văn Lộc", "012343454", 1000000);
// $user1 -> guiTien(1500000);
// echo"<br>";
// // NguoiLon::getClass();


require_once "./animal.php";
require_once "./dog.php";
require_once "./cat.php";

//Tạo đối tượng
$dog = new dog("Cậu Vàng", "Vàng");
$cat = new cat("Tâm", "Xanh");
$dog->tiengkeu();
$cat->tiengkeu();
