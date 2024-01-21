<?php
require_once "Model/product.php";
class ProductController
{
    function listProduct()
    {
        $obj = new Product();
        $product = $obj->getProduct();
        var_dump($product);
        require_once "View/product/list.php";
    }
}
