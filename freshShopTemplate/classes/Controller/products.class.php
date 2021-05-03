<?php
namespace App\Controller;
use App\Model\Model;

class Products extends Model {
    public $row_count;
    public $product_id= [];
    public $product_name = [];
    public $product_price = [];
    public $product_category = [];
    public $product_saleprice = [];
    public $product_stock = [];
    public $product_image = [];
    public $product_description = [];
    public $product_filter = [];
    public $specific_product = [];

    public function __construct() {
        $this->row_count = $this->rowCountProducts()->fetchColumn();
        $products = $this->getProducts();
        while($product = $products->fetch()) {
            array_push($this->product_id, $product['product_id']);
            array_push($this->product_name, $product['name']);
            array_push($this->product_price, $product['price']);
            array_push($this->product_category, $product['category']);
            array_push($this->product_saleprice, $product['sale_newprice']);
            array_push($this->product_stock, $product['stock_quantity']);
            array_push($this->product_image, $product['image']);
            array_push($this->product_description, $product['description']);
            array_push($this->product_filter, $product['filter']);
        }
    }

    public function getProductByID($id) {
        $theproduct = $this->getSpecificProduct($id);
        while($productinfo = $theproduct->fetch()) {
            array_push($this->specific_product, $productinfo);
        }
    }



}