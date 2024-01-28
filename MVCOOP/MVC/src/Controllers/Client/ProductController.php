<?php

function productList()
{
    $data['productAll'] = getAllProduct();
    showViewClient('./client/views/product/list.php', $data);

}
function productDetail($id)
{
    $data['product'] = $product = getProductByID($id);

    $product ? showViewClient('./client/views/product/detail.php', $data) : e404();
}
