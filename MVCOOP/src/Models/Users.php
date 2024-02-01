<?php

namespace Thangnghiem\Mvcoop\Models;

use Thangnghiem\Mvcoop\Commons\Model;

class Users extends Model
{
    public function getAll()
    {
        try 
        {
            $sql = "SELECT * FROM users";

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

    public function getByID($user_id)
    {
        try 
        {
            $sql = "SELECT * FROM users WHERE user_id = :user_id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':user_id', $user_id);

            $stmt->execute();

            return $stmt->fetch();
        } 
        catch (\Exception $e) 
        {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function insert($user_id, $name, $email, $password)
    {
        try 
        {
            $sql = "
                INSERT INTO users(user_id, name, email, password) 
                VALUES (:user_id, :name, :email, :password)
            ";

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            $stmt->execute();
        } 
        catch (\Exception $e) 
        {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function update($user_id, $name, $email, $password)
    {
        try 
        {
            $sql = "
                UPDATE users 
                SET name = :name,
                    email = :email,
                    password = :password
                WHERE user_id = :user_id
            ";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':user_id', $user_id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            $stmt->execute();
        } 
        catch (\Exception $e) 
        {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function deleteByID($user_id)
    {
        try {
            $sql = "DELETE FROM users WHERE user_id = :user_id";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':user_id', $user_id);

            $stmt->execute();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function getByEmailAndPassword($email, $password)
    {
        try
        {
            $sql = "SELECT * FROM users WHERE email =:email AND password =:password";

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $password);

            $stmt->execute();
            return $stmt->fetch();
        }
        catch (\Exception $e)
        {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
}
