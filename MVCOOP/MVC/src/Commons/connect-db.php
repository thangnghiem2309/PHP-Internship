<?php

$host = 'localhost';
$port = '3306';
$dbname = 'mvc';
$username = 'root';
$password = '123@ABC!@#abc';
try
{
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    //Dat che do loi PDO thanh ngoai le
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $PDOException)
{
    echo "Kết nối thất bại" . $PDOException ->getMessage();
    die;
}