<?php
require_once __DIR__ ."/env.php";
require_once __DIR__ ."/config.php";
require_once __DIR__ ."/App/Model/BaseModel.php";
require_once __DIR__ ."/App/Model/ProductModel.php";

use App\Model\ProductModel;

dd(ProductModel::all());