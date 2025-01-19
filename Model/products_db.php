<?php
require_once('database.php');

class ProductsDB {
    public static function getProductByNo($productNo) {
        $db = new Database();
        $dbConn = $db->getDbConn();

        if ($dbConn) {
            $query = "SELECT * FROM products
                WHERE productNo = '$productNo'";

            return $dbConn->query($query);
        } else {
            return false;
        }
    }

    public static function getAllProducts() {
        $db = new Database();
        $dbConn = $db->getDbConn();

        if ($dbConn) {
            $query = "SELECT * FROM products";
            return $dbConn->query($query);
        } else {
            return false;
        }
    } 
}
?>