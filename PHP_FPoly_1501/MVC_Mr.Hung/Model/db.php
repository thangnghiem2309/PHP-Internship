<?php
require_once "env.php";

//Tạo hàm kết nối cơ sở dữ liệu
function getConnect()
{
    $connect = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=" . DBCHARSET, DBUSER, DBPASS);
    return $connect;
}

//Hàm lấy dữ liệu
//CHÚ Ý: Nếu getAll = true => trả về list
//getAll = false => thực hiện các chức năng thêm, sửa, xóa
function getData($query, $getAll = true)
{
    $conn = getConnect();
    $stmt = $conn->prepare($query);
    $stmt->execute();
    if ($getAll)
    {
        return $stmt->fetchAll();
    } 
    else 
    {
        return $stmt->fetch();
    }
}
