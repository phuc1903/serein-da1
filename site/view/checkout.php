<div class="container-fluid">
    <div class="row">
        <div class="col-8 mt-4 mb-4">
            <h3 class="mt-4 mb-4">Giỏ hàng của bạn</h3>
            <table class="table responsive ">
                <thead class="text-info">
                    <tr class="">
                        <th scope="col">STT</th>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_COOKIE['user_id'])) {
                        $user_id = $_COOKIE['user_id'];
                    }
                    $sum = 0;
                    $count_cart = 0;
                    $i = 1;
                    if ($cartlist_by_userid) {
                        foreach ($cartlist_by_userid as $cart) {
                            $id = $cart['id'];
                            $name = $cart['name'];
                            $img = $cart['img'];
                            $price = number_format($cart['price']);
                            $quantity = $cart['quantity'];
                            $total = number_format($quantity * $cart['price']);
                            echo "
                                    <tr class='p-3'>
                                    <td>$i</td>
                                    <td><img style = 'max-width:40px;' src='$img' class='img-fluid img-product'/>$name</td>
                                    <td>$price VNĐ</td>
                                    <td>$quantity</td>
                                    <td>$total VNĐ</td>
                                </tr>      
                                </tbody>";
                            $sum += $quantity * $cart['price'];
                            $i++;
                            $count_cart++;
                        }
                        $delivery = 100000 * $count_cart;
                        $sum_fm = number_format($sum);
                        $total = number_format($sum + $delivery);
                        $_SESSION['total_value'] = $sum + $delivery;
                        echo "
                        <tr>
                        <th colspan = '4' class ='text-left'>Tổng giá sản phẩm:</th>
                        <th class='text-center'>$sum_fm VNĐ</th>
                        </tr>
                        <tr>
                        <th colspan = '4' class ='text-left'>Phí giao hàng: </th>
                        <th class='text-center'>$delivery VNĐ</th>
                        </tr>
                                <th colspan = '4' class ='text-left'>Tổng thanh toán: </th>
                                <th class='text-center'>$total VNĐ</th>";
                    }
                    ?>
            </table>
        </div>
        <div class="col-4 mt-4 mb-4">
            <h3 class="mt-4 mb-4">Thông tin người nhận</h3>
            <form action="./controller/cart_controller.php?action=checkout" method="post">
                <div class="form-group mb-3">
                    <input class="form-control " type="text" id="" readonly name="fullname" value="<?= isset($_COOKIE['fullname']) ? $_COOKIE['fullname'] : '' ?>" placeholder="VD: Nguyễn Văn A" autofocus />
                </div>
                <div class="form-group mb-3">
                    <input class="form-control" type="text" id="" readonly name="sex" value="<?= isset($_COOKIE['sex']) ? $_COOKIE['sex'] : '' ?>" placeholder="VD: Nam" />
                </div>
                <div class="form-group mb-3">
                    <input type="text" class="form-control" id="" readonly name="address" value="<?= isset($_COOKIE['address']) ? $_COOKIE['address'] : '' ?>" placeholder="VD: 123 Quận 12, tp.HCM" />
                </div>
                <div class="form-group mb-3">
                    <input type="text" id="" readonly name="phone" class="form-control" value="<?= isset($_COOKIE['phone']) ? $_COOKIE['phone'] : '' ?>" placeholder="VD: 0123456789" />
                </div>
                <div class="form-group mb-3">
                    <select name="payment_method" id="payment_method">
                        <option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
                        <option value="Zalopay">Zalopay</option>
                        <option value="Ví MOMO">Ví MOMO</option>
                        <option value="Thẻ ngân hàng">Thẻ ngân hàng</option>
                    </select>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn cart_btn">Hoàn tất đặt hàng</button>
                </div>
            </form>
        </div>
    </div>

</div>