<?php
require_once('products.php');
require_once('../Model/products_db.php');

class ProductsController {
    private static function rowToProducts($row) {
        $products = new Products($row['productName'],
        $row['productNo'], $row['productPrice'],
        $row['productInventory']);
    $products->setProductNo($row['productNo']);
    return $products;
    }

    public static function getProductsByNo($productNo) {
        $queryRes = ProductsDB::getProductByNo($productNo);

        if ($queryRes) {
            $productList = array();
            foreach ($queryRes as $row) {
                $productList[] = self::rowToProducts($row);
            }
            return $productList;
        } else {
            return false;
        }
    }

    public static function getAllProducts() {
        $queryRes = ProductsDB::getAllProducts();

        if($queryRes) {
            $productList = array();
            foreach ($queryRes as $row) {
                $productList[] = self::rowToProducts($row);
            }
            return $productList;
        } else {
            return false;
        }
    }

    //delete or update should go here
    //make sure to put the function in products_db first
}

?>