<?php
    require_once "Controller/productController.php";
    //index trong MVC có vai trò điều hướng các phương thức từ controller
    $url = isset($_GET['url']) == true ?$_GET['url']:"/";
    switch ($url) 
    {
        case "/":
            listProduct();
            break;
    }
