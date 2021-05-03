<?php
if(isset($_POST['addtocart'])) {
    $hidden_id = $_POST['hidden_id'];
    $hidden_qty = $_POST['hidden_qty'];
    
    $item = new Products(); 
    $item->getProductByID($_POST['hidden_id']); 

    // get info from property array and transform to new array
    $item_array = array(
        'product_id'=>$item->specific_product[0]['product_id'],
        'name'=>$item->specific_product[0]['name'],
        'price'=>$item->specific_product[0]['price'],
        'category'=>$item->specific_product[0]['category'],
        'sale_newprice'=>$item->specific_product[0]['sale_newprice'],
        'stock_quantity'=>$item->specific_product[0]['stock_quantity'],
        'image'=>$item->specific_product[0]['image'],
        'description'=>$item->specific_product[0]['description'],
    );

    // json encode created array
    $item_data = json_encode($item_array);

    // create 1-day cookie
    set_cookie('shopping_cart', $item_data, time() + 86400*30);
}
