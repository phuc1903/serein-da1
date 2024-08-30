<div class="container col-10" style="min-height: 300px;">
    <h3 class="text-center mt-4 mb-4">Lịch sử đặt hàng</h3>
    <table class="table">
        <thead class="text-info">
            <tr class="text-center">
                <th>STT</th>
                <th>Mã đơn hàng</th>
                <th>Tổng giá trị</th>
                <th>Thời gian hoàn tất</th>
                <th>Xem chi tiết</th>
        </thead>
        <tbody>
            <?php
            $index = 1;
            if ($bill_list) {
                foreach ($bill_list as $bill) {
                    $bill_id = $bill['id'];
                    $total_value = number_format($bill['total_value']);
                    $completed_at = $bill['completed_at'];
                    echo "
                            <tr class='text-center'>
                                <td>$index</td>
                                <td>$bill_id </td>
                                <td>$total_value VNĐ</td>
                                <td>$completed_at</td>
                                <td> <a href='../index.php?page=history_detail&bill_id=$bill_id'>Xem chi tiết</a></td>
                            </tr>
                        ";
                    $index++;
                }
            } else {
                echo "
                        <tr class='text-center'>
                            <td colspan = '5'>
                                <h3 class = 'text-danger mt-4'>Không có lịch sử mua hàng !</h3>
                            </td>
                        </tr>
                        ";
            }
            ?>
</div>
</table>
</div>
<hr class="hr mt-5 mb-4" />