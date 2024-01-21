<?php

namespace App\Model;
use PDO;
class BaseModel
{
    protected $conn;
    protected $sqlBuilder;
    protected $tableName;
    public function __construct()
    {
        $host = HOSTNAME;
        $dbname = DBNAME;
        $username  = USERNAME;
        $password = PASSWORD;
        try 
        {
            $this->conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (\PDOException $e) 
        {
            echo "Lỗi kết nối dữ liệu: " . $e->getMessage();
        }
    }
    public static function all()
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName";

        //Chuẩn bị
        $stmt = $model->conn->prepare($model->sqlBuilder);

        //Thực thi
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}