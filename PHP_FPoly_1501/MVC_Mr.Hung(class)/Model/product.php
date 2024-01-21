<?php
require_once "db.php";

class product extends DB
{
    //Hàm lấy dữ liệu
    function getProduct()
    {
        $sql = "select * from product";
        return $this -> getData($sql);
    }
}
