<?php
    spl_autoload_register(function($class){
        require_once $class . '.php';
    });
    require_once 'Model.php';
    require_once 'RequireInterface.php';
    class Product extends Model implements RequireInterface{
        protected string $tableName = 'products';
        public function getAll(){
            return 'LIGMABALL';
        }
        public function getPaginate(int $page, int $perPage){

        }
        public function searchByKeyword(string $keyword = null){

        }
        public static function getTableName(){
            return (new static) -> tableName;
        }
        public function showClassName()
        {
            
        }
    }
    $product = new Product();
    $data = $product -> getAll();

    echo "<pre>";
    print_r(Product::getTableName());
?>