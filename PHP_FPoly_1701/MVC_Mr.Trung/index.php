<?php
require_once "./mvc/controller/ProductController.php";
$url = isset($_GET['url']) ? $_GET['url'] : "/";
switch ($url) 
{
    case '/':
        echo "Đây là trang chủ";
        $products = new ProductController();
        $products -> listProduct();
        break;
    case "add-product":
        echo "Đây là trang thêm";
        break;
    default:
        echo "404";
        break;
}
