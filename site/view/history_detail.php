<div class="container col-10" style="min-height: 300px;">
    <h3 class="text-center mt-4 mb-4">Chi tiết đơn hàng</h3>
    <h4 class="mt-4 mb-4">Mã đơn: <?= $bill_id ?></h4>
    <table class="table">
        <thead class="text-info">
            <tr class="text-center">
                <th>STT</th>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
        </thead>
        <tbody>
            <?php
            $index = 1;
            foreach ($bill_detail as $bill) {
                $bill_id = $bill['bill_id'];
                $pro_name = $bill['name'];
                $img = $bill['img'];
                $quantity = $bill['quantity'];
                $price = number_format($bill['price']);
                echo "
                            <tr class='text-center'>
                                <td>$index</td>
                                <td><img src='$img' style='width:40px;'>$pro_name</></td>
                                <td>$quantity</td>
                                <td>$price VNĐ</td>
                            </tr>
                        ";
                $index++;
            }
            ?>
</div>
</table>
</div>
<hr class="hr mt-5 mb-4" />