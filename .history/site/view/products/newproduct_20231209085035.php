<div class="container-xxl py-5">
    <div class="container">
        <div class="g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-12">
                <h3 class="mb-0">
                    <span class="text-title">SẢN PHẨM MỚI</span>
                </h3>
            </div>
            <!-- <a class='btn btn-outline-dark px-4 cart' onclick='add_to_cart($id,$name,$price,$quantity,$img)'><i class='bi bi-cart'></i></a> -->

        </div>
        <div class="row g-4">
            <?php
            foreach ($new_products as $row) {
                $id = $row['id'];
                $id_category = $row['id_category'];
                $name = $row['name'];
                $img = $row['img'];
                $price = number_format($row['price']);
                $price_nonfm = $row['price'];
                $quantity = 1;
                echo "
                <div class='col-lg-3 col-md-6 wow fadeInUp text-center' data-wow-delay='0.1s'>
                <div class='product'>
                    <img src='$img' class='img-fluid img-product'/>
                    <div class='membership-item'>
                        <div class='info'>
                            <h4 class='product-name mb-3'>$name</h4>
                            <h3 class='text-title mb-3'>$price VNĐ</h3>
                        </div>
                        <div class='button mb-2'>
                        <a class='btn_edit_shop_detail btn px-4 detail' href='index.php?page=detail&product_id=$id&id_category=$id_category'>Detail</a>
                        <button id='btnAddProduct'class='btn btn_edit_shop_cart px-4 cart' onclick='addProduct($id, $quantity, $price_nonfm)'><i class='bi bi-cart'></i></button>
                    </div>
                    </div>
                </div>
            </div>";
            }

            ?>
        </div>
    </div>
</div>