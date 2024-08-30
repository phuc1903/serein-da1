<!-- content Start -->
<?php
// if (isset($_SESSION['cart'])) {
//     print_r($_SESSION['cart']);
// }
//session_destroy();
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-9 cart_list">
            <h3 class="">Giỏ hàng</h3>
            <!-- List product -->
            <?php
            if (empty($_SESSION['cart']) and !isset($_COOKIE['user_id'])) {
                $delivery = 0;
                echo "                               
                 <div class='product-quantity'>
                    <h2 class='text-center mt-4'>Không có sản phẩm nào !</h2>
                </div>";
            }
            $total = 0;
            $sum = 0;
            if (isset($_SESSION['cart'])) {
                foreach ($_SESSION['cart'] as $row) {
                    $id = $row['id'];
                    $quantity = $row['quantity'];
                    $price = number_format($row['price']);
                    $sum = $row['price'] * $quantity;
                    $cart_list = get_product_by_id($id);
                    foreach ($cart_list as $pro) {
                        if ($id == $pro['id']) {
                            $name = $pro['name'];
                            $img = $pro['img'];
                            echo "
                        <div class='row cart-list'>
                            <div class='col-3 cart-product-img'>
                                <img src='$img' alt=''>
                            </div>
                            <div class='col-6 cart-product-info'>
                                <div class='cart-product-info-top'>
                                    <div class='product-name'>$name</div>
                                </div>
                                <div class='cart-product-info-bottom'>
                                <button class='cart-product-delete' onclick='deleteProduct($id)' id=''>Xóa</button>
                                </div>
                            </div>
                            <div class='col-3 cart-pay'>
                                <div class='product-price'>$price VNĐ</div>
                                <div class='product-quantity'>
                                    <button class='qtt-btn' onclick='buttonClick(1)' id=''>-</button>
                                    <input class='product-quantity-number' type='number' name='' id='product-quantity-number' value='$quantity' min='0'>
                                    <button class='qtt-btn' onclick='buttonClick(0)' id=''>+</button>
                                </div>
                            </div>
                        </div>";
                        }
                    }
                    $total += $sum;
                }
                $delivery = 100000 * count($_SESSION['cart']);
            }
            if (isset($_COOKIE['user_id'])) {
                if (empty($cartlist_by_userid)) {
                    $delivery = 0;
                    echo "                               
                     <div class='product-quantity'>
                        <h2 class='text-center mt-4'>Không có sản phẩm nào !</h2>
                    </div>";
                }
                $count_cart = 0;
                foreach ($cartlist_by_userid as $product) {
                    $id = $product['id'];
                    $name = $product['name'];
                    $img = $product['img'];
                    $quantity = $product['quantity'];
                    $price = number_format($product['price']);
                    $sum = $product['price'] * $quantity;
                    echo "
                    <div class='row cart-list'>
                        <div class='col-3 cart-product-img'>
                            <img src='$img' alt=''>
                        </div>
                        <div class='col-6 cart-product-info'>
                            <div class='cart-product-info-top'>
                                <div class='product-name'>$name</div>
                            </div>
                            <div class='cart-product-info-bottom'>
                                <a class = 'cart-product-delete' href='./controller/cart_controller.php?page=cart&product_id=$id&action=delete'>Xóa</a>
                            </div>
                        </div>
                        <div class='col-3 cart-pay'>
                            <div class='product-price'>$price VNĐ</div>
                            <div class='product-quantity'>
                            <a class = 'qtt-btn' href='./controller/cart_controller.php?page=cart&product_id=$id&action=decrease'>-</a>
                            $quantity 
                            <a class = 'qtt-btn' href='./controller/cart_controller.php?page=cart&product_id=$id&action=increase'>+</a>
                            </div>
                        </div>
                    </div>";
                    $count_cart++;
                    $total += $sum;
                }
                $delivery = 100000 * $count_cart;
            }
            ?>
            <!--End List product -->
        </div>
        <div class="col-3">
            <h3 class="">THANH TOÁN</h3>
            <div class="coupon">
                <div class="coupon-content row">
                    <div class="coupon-content-left col-6">
                        <div>Giá sản phẩm</div> <br>
                        <div>Phí giao hàng</div> <br>
                        <div>Giảm giá</div>
                    </div>
                    <div class="coupon-content-right col-6">
                        <div class="pr-edit"><?= number_format($total) ?></div> <br>
                        <div class="pr-edit"><?= number_format($delivery) ?></div> <br>
                        <div class="pr-edit">0</div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-5 cart-total-price">Tổng tiền: </div>
                    <div class="col-7 cart-total-price"><?= number_format($total + $delivery) ?><span> VNĐ</span></div>
                </div>
                <?php
                if (isset($_COOKIE['user_id'])) {
                    if (empty($cartlist_by_userid)) {
                        echo "<a class='cart-btn-submit' href='#' onclick='notify()'>Đặt hàng</a>";
                    } else {
                        echo "<a class='cart-btn-submit' href='index.php?page=checkout'>Đặt hàng</a>";
                    }
                } else {
                    echo "
                    <a class='cart-btn-submit' href='index.php?page=login'>Đặt hàng</a>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- content End -->