<?php

namespace App\Model;

use PDO;

class BaseModel
{
    protected $conn;
    protected $sqlBuilder = "";
    protected $tableName;
    public function __construct()
    {
        $host = HOSTNAME;
        $dbname = DBNAME;
        $username  = USERNAME;
        $password = PASSWORD;
        try {
            $this->conn = new PDO("mysql:host=$host; dbname=$dbname; charset=utf8", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Lỗi kết nối dữ liệu: " . $e->getMessage();
        }
    }

    //Phương thức lấy ra toàn bộ dữ liệu của bảng
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

    //method tìm dữ liệu theo id
    public static function find($id)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE id=:id";

        //Chuẩn bị
        $stmt = $model->conn->prepare($model->sqlBuilder);

        //Thực thi
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetchAll(PDO::FETCH_CLASS);

        //Nếu mảng có dữ liệu
        if($result)
        {
            return $result[0];
        }
        return $result;
    }
    //method tìm theo điều kiện
    public static function where($column, $condition, $value)
    {
        $model = new static;
        $model->sqlBuilder = "SELECT * FROM $model->tableName WHERE `$column` $condition '$value' ";
        return $model;
    }
    public function andWhere($column, $condition, $value)
    {
        $this->sqlBuilder .= " AND `$column` $condition '$value' ";
        return $this;
    }
    public function orWhere($column, $condition, $value)
    {
        $this->sqlBuilder .= "OR `$column` $condition '$value' ";
        return $this;
    }
    //method get để thực thi câu lệnh SQL
    public function get()
    {
        $stmt = $this->conn->prepare($this->sqlBuilder);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
    //method delete xóa dữ liệu theo id
    public static function delete($id)
    {
        $model = new static;
        $model->sqlBuilder = "DELETE FROM $model->tableName WHERE id=:id";
        $stmt = $model->conn->prepare($model->sqlBuilder);
        $stmt->execute();
    }

    //method insert thêm dữ liệu
    public static function insert($data)
    {
        $model = new static;
        $model->sqlBuilder = "INSERT INTO $model->tableName( ";
        $values = " VALUES( ";
        foreach ($data as $column => $values)//biến value để lưu thông tin dành cho values
        {
            $model->sqlBuilder .= " `{$column}`, ";
            $values .= ":$column, ";     
        }
        //Xóa dấu "," ở bên phải của chuỗi
        $model->sqlBuilder = rtrim($model->sqlBuilder,",");
        $values = rtrim($values,",");
        //Nối thêm values của sqlBuilder
        $model->sqlBuilder .= ")".$values .=")";
    }
    
    

}