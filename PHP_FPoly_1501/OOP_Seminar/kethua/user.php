<?php
require_once "db.php";

//php hỗ trợ đơn kế thừa: 1 class chỉ được extends 1 class
//trait (PHP ver >= 5.4)
class user extends db
{
    //Lấy toàn bộ user trong db
    public function getUsers()
    {
        $sql = "SELECT * FROM users WHERE 1";
        return $this->getData($sql);
    }
}

//Kế thừa bắc cầu
class NhanVien extends user
{
    
}
