<?php

namespace Thangnghiem\Mvcoop\Models;

use Thangnghiem\Mvcoop\Commons\Model;

class Posts extends Model
{
    public function getAll() {
        try {    
            $sql = "
                SELECT 
                    c.name      c_name,
                    p.id        p_id,
                    p.title     p_title,
                    p.excerpt   p_excerpt,
                    p.image     p_image,
                    p.content   p_content
                FROM posts p
                INNER JOIN categories c
                    ON p.cate_id = c.cate_id
            ";
    
            $stmt = $this->conn->prepare($sql);
        
            $stmt->execute();
        
            return $stmt->fetchAll();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function getByID($id) {
        try {    
            $sql = "
                SELECT 
                    c.name          c_name,
                    p.id            p_id,
                    p.title         p_title,
                    p.excerpt       p_excerpt,
                    p.image         p_image,
                    p.content       p_content,
                    p.cate_id       p_cate_id
                FROM posts p
                INNER JOIN categories c
                    ON p.cate_id = c.cate_id
                WHERE p.id = :id
            ";
    
            $stmt = $this->conn->prepare($sql);
        
            $stmt->bindParam(':id', $id);

            $stmt->execute();
        
            return $stmt->fetch();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function insert($cate_id, $title, $content, $excerpt = null, $image = null) {
        try {    
            $sql = "
                INSERT INTO posts(cate_id, title, excerpt, content, image) 
                VALUES (:cate_id, :title, :excerpt, :content, :image) 
            ";
    
            $stmt = $this->conn->prepare($sql);
        
            $stmt->bindParam(':cate_id', $cate_id);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':excerpt', $excerpt);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':image', $image);

            $stmt->execute();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function update($id, $cate_id, $title, $content, $excerpt = null, $image = null) {
        try {    
            $sql = "
                UPDATE posts 
                SET cate_id         = :cate_id, 
                    title           = :title, 
                    excerpt         = :excerpt, 
                    content         = :content, 
                    image           = :image
                WHERE id = :id
            ";
    
            $stmt = $this->conn->prepare($sql);
        
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':cate_id', $cate_id);
            $stmt->bindParam(':title', $title);
            $stmt->bindParam(':excerpt', $excerpt);
            $stmt->bindParam(':content', $content);
            $stmt->bindParam(':image', $image);

            $stmt->execute();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }

    public function deleteByID($id) {
        try {    
            $sql = "DELETE FROM posts WHERE id = :id";
    
            $stmt = $this->conn->prepare($sql);
        
            $stmt->bindParam(':id', $id);

            $stmt->execute();
        } catch (\Exception $e) {
            echo 'ERROR: ' . $e->getMessage();
            die;
        }
    }
}