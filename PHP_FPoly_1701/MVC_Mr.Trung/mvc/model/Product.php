<?php
require_once "db.php";

//Tạo các hàm xử lý thao tác hoặc truy vấn
class Product extends db
{
    public function getAllProduct()
    {
        $sql = "SELECT * FROM products";
        return $this -> getData($sql);
    }
}
