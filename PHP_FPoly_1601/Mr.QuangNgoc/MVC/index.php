<?php
require_once __DIR__ . "/env.php";
require_once __DIR__ . "/config.php";
require_once __DIR__ . "/vendor/autoload.php";

use App\Model\ProductModel;

// dd(ProductModel::find(143));
// $product = ProductModel::where('name', 'LIKE', '%iphone%')->andWhere('price', '>=', 1000)->get();
// dd($product);

$data = [
    'name' => 'Iphone 20',
    'price' => 2500,
    'detail' => '1 quả thận'
];
dd(ProductModel::insert($data));