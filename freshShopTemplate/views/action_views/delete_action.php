<?php 
use App\Controller\Products;

$cart_data = new Products();
$cart_data = $cart_data->cookie();

foreach($cart_data as $keys=>$values) {
    if($cart_data[$keys]['product_id'] == $_GET['id']) {
        // delete product from array
        unset($cart_data[$keys]);

        // update cookie with new info
        $item_data = json_encode($cart_data);
        setcookie('shopping_cart', $item_data, time() + 86400*30);
        header('location: index.php?action=cart');

    } 
}


