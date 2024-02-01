<?php

namespace Thangnghiem\Mvcoop\Models;

use Thangnghiem\Mvcoop\Commons\Model;

class Categories extends Model
{
    public function getAll() 
    {
        try 
        {    
            $sql = "SELECT * FROM categories";
        
            $stmt = $this->conn->prepare($sql);
            
            $stmt->execute();
            
            return $stmt->fetchAll();
        } 
        catch (\Exception $e) 
        {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    public function getByID($cate_id) 
    {
        try 
        {    
            $sql = "SELECT * FROM categories WHERE cate_id = :cate_id";
        
            $stmt = $this->conn->prepare($sql);
            
            $stmt->bindParam(':cate_id', $cate_id);
    
            $stmt->execute();
            
            return $stmt->fetch();
            
        } 
        catch (\Exception $e) 
        {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    
    public function insert($name) 
    {
        try 
        {    
            $sql = "
            INSERT INTO categories(name) 
            VALUES (:name) 
            ";

            $stmt = $this->conn->prepare($sql);
            
            $stmt->bindParam(':name', $name);
    
            $stmt->execute();
        } 
        catch (\Exception $e) 
        {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    
    public function update($cate_id, $name) 
    {
        try 
        {    
            $sql = "
            UPDATE categories 
            SET name = :name 
            WHERE cate_id = :cate_id
            ";
                
            $stmt = $this->conn->prepare($sql);
            
            $stmt->bindParam(':cate_id', $cate_id);

            $stmt->bindParam(':name', $name);
    
            $stmt->execute();
        } 
        catch (\Exception $e) 
        {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
    
    public function deleteByID($cate_id) 
    {
        try 
        {    
            $sql = "DELETE FROM categories WHERE cate_id = :cate_id";
        
            $stmt = $this->conn->prepare($sql);
            
            $stmt->bindParam(':cate_id', $cate_id);
    
            $stmt->execute();
            
        } 
        catch (\Exception $e) 
        {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
}
