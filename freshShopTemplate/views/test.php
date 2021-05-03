<?php
use App\Controller\Products;

/*
public $product_id= [];
public $product_name = [];
public $product_price = [];
public $product_category = [];
public $product_saleprice = [];
public $product_stock = [];
public $product_image = [];
public $product_description = [];
public $product_filter = [];
*/

$item = new Products();

for($i=0; $i < $item->row_count; $i++) {
    echo $item->product_name[$i] . " is " . $item->product_id[$i] . "<br>";
}


