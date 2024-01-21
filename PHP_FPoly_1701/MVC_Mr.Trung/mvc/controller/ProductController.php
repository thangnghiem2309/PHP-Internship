<?php
require_once "./mvc/model/Product.php";

class ProductController
{
    public function listProduct()
    {
        echo "<br>Đây là trang danh sách";
        echo "<br>";
        $product = new Product();
        $listProduct = $product -> getAllProduct();
        var_dump($listProduct);
        include "./mvc/view/product/list.php";
    }
}
