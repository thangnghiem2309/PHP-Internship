<?php
require_once "Model/product.php";
function listProduct()
{
    $product = getProduct();
    var_dump($product);
    require_once "View/product/list.php";
}