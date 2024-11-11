<?php 
    namespace App\controllers;
    // require_once 'app/models/product.php';
    use App\models\Product;
    class ProductController{
        function listProduct(){
            $obj = new Product();
            $product = $obj->getProduct();
            //var_dump($product);
            require_once 'app/views/product/list.php';
        }
        function addProduct(){
            require_once 'app/views/product/add.php';
        }

        function hienThiSP(){
            echo "đây là phương thức hiển thị";
        }
    }
    
?>