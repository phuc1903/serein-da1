<div class="container-xxl py-5">
    <div class="container">
        <div class="g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">

        </div>
        <div class="row g-4">
            <?php
            extract($_REQUEST);
            foreach ($categories as $category) {
                $index = 0;
                $category_id = $category['id'];
                $category_name = $category['name'];
                echo "
                <div class='col-lg-12'>
                <h3 class='mb-0'>
                    <span class='text-title'>$category_name</span>
                </h3>
            </div>
                ";
                foreach ($products_by_category as $product) {
                    $id = $product['id'];
                    $name = $product['name'];
                    $price = number_format($product['price']);
                    $img = $product['img'];
                    $id_category = $product['id_category'];
                    $quantity = 1;
                    $price_nonfm = $row['price'];
                    if ($id_category == $category_id) {
                        echo "
                        <div class='col-lg-3 col-md-6 wow fadeInUp text-center' data-wow-delay='0.1s'>
                        <div class='product'>
                            <img class='img-fluid mb-3 mt-2' src='$img' alt='' />
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
                        $index++;
                        if ($index == 8 and !isset($page)) {
                            break;
                        }
                    }
                }
            }
            ?>
        </div>
    </div>
</div>