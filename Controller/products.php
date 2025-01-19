<?php
//productName, productNo, productPrice, productInventory
class Products {
    private $productName;
    private $productNo;
    private $productPrice;
    private $productInventory;

    public function __construct($productName, $productNo, $productPrice,
        $productInventory)
    {
        $this->productName = $productName;
        $this->productNo = $productNo;
        $this->productPrice = $productPrice;
        $this->productInventory = $productInventory;
    }

    public function getProductName() {
        return $this->productName;
    }
    public function setProductName($value) {
        $this->productName = $value;
    }

    public function getProductNo() {
        return $this->productNo;
    }
    public function setProductNo($value) {
        $this->productNo = $value;
    }

    public function getProductPrice() {
        return $this->productPrice;
    }
    public function setProductPrice($value) {
        $this->productPrice = $value;
    }

    public function getProductInventory() {
        return $this->productInventory;
    }
    public function setProductInventory($value) {
        $this->productInventory = $value;
    }
}
?>