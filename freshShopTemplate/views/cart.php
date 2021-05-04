<?php use App\Controller\Products ?>
<?php $title = 'ThewayShop - Ecommerce Bootstrap 4 HTML Template'; ?>
<?php ob_start(); ?>

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <?php
    if(isset($_COOKIE['shopping_cart'])) {
        $total = 0;
        $cart_data = new Products();
        $cart_data = $cart_data->cookie();
        foreach($cart_data as $keys=>$values) {
            ?>
            <div class="cart-box-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-main table-responsive">     
                                <table class="table">  
                                    <thead>
                                        <tr>
                                            <th>Images</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                            <th>Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="thumbnail-img">
                                                <img class="img-fluid" src="public/images/<?= $values['image']; ?>" alt="" />
                                            </td>
                                            <td class="name-pr">
                                                <?= $values['name']; ?>
                                            </td>
                                            <td class="price-pr">
                                                <p>
                                                <?php
                                                //$theprice;
                                                if($values['category'] == 'sale') {
                                                    $theprice = $values['sale_newprice'];
                                                    echo "Sale - ";
                                                } else {
                                                    $theprice =  $values['price'];
                                                }
                                                echo "$" . $theprice;
                                                ?>
                                                </p>
                                            </td>
                                            <td class="quantity-box"><input type="number" name="qty" size="4" value="<?= $values['quantity_tobuy']; ?>" min="0" step="1" class="c-input-text qty text"></td>
                                            <td class="total-pr">
                                                <p><?= "$" . $theprice * $values['quantity_tobuy']; ?></p>
                                            </td>
                                            <td class="remove-pr">
                                                <a href="index.php?action=delete&id=<?php echo $values['product_id']; ?>"><i class="fas fa-times"></i></a>
                                            </td>
                                        </tr> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
        
                    <div class="row my-5">
                       <!--  <div class="col-lg-6 col-sm-6">
                            <div class="coupon-box">
                                <div class="input-group input-group-sm">
                                    <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                                    <div class="input-group-append">
                                        <button class="btn btn-theme" type="button">Apply Coupon</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-6 col-sm-6">
                            <div class="update-box">
                                <input value="Update Cart" type="submit">
                            </div>
                        </div>
                    </div>
        
                    <div class="row my-5">
                        <div class="col-lg-8 col-sm-12"></div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="order-box">
                                <h3>Order summary</h3>
                                <div class="d-flex">
                                    <h4>Sub Total</h4>
                                    <div class="ml-auto font-weight-bold">
                                        <?php
                                            $total = $total + ($theprice * $values['quantity_tobuy']);
                                            echo $total;
                                        ?>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Discount</h4>
                                    <div class="ml-auto font-weight-bold">  </div>
                                </div>
                                <hr class="my-1">
                                <!-- <div class="d-flex">
                                    <h4>Coupon Discount</h4>
                                    <div class="ml-auto font-weight-bold"> $ 10 </div>
                                </div> -->
                                <div class="d-flex">
                                    <h4>Tax</h4>
                                    <div class="ml-auto font-weight-bold">  </div>
                                </div>
                                <div class="d-flex">
                                    <h4>Shipping Cost</h4>
                                    <div class="ml-auto font-weight-bold"> Free </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Grand Total</h5>
                                    <div class="ml-auto h5">  </div>
                                </div>
                                <hr> </div>
                        </div>
                  
                        <div class="col-12 d-flex shopping-box"><a href="checkout.html" class="ml-auto btn hvr-hover">Checkout</a> </div>
               
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        ?>
        <div class="my-5 text-center">
            <p>No items added to your shopping cart.</p>
            <a href="index.php?action=shop">Click here to check out our products !</a>
        </div>
        <?php
    }
        ?>
   
    <!-- End Cart -->

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>