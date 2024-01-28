<?php
function getAllProduct()
{
    try
    {
        $sql = "SELECT * FROM products";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(Exception $e)
    {
        echo 'ERROR: ' . $e ->getMessage();
        die;
    }
}

function getProductByID($id)
{
    try
    {
        $sql = "SELECT * FROM products WHERE id=:id";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    catch(Exception $e)
    {
        echo 'ERROR: ' . $e ->getMessage();
        die;
    }
}