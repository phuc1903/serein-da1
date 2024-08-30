<div class='container-xxl py-5'>
  <div class='container'>
    <div class='row g-5'>
      <?php
      foreach ($detail as $product) {
        $name = $product['name'];
        $id = $product['id'];
        $img = $product['img'];
        $quantity = 1;
        $price_nonfm = $product['price'];
        $price = number_format($product['price']);
        $price_sale = number_format($product['price_sale']);
        $description = $product['description'];
        echo "
        <div class='col-lg-6 wow fadeInUp' data-wow-delay='0.1s'>
        <div class='detail_product_img'>
          <img style = 'box-shadow: 0 0 2px gray' class='img-fluid' src='$img' alt=''>
        </div>
        <div class='container_mini_pro_detail_img'>
          <div class='mini_img'>
            <img src='$img' alt='' style = 'box-shadow: 0 0 2px gray'>
          </div>
          <div class='mini_img'>
            <img src='$img' alt=''style = 'box-shadow: 0 0 2px gray'>
          </div>
          <div class=' mini_img'>
            <img src='$img' alt=''style = 'box-shadow: 0 0 2px gray'>
          </div>
        </div>
      </div>
      <div class='col-lg-6 wow fadeInUp' data-wow-delay='0.5s'>
        <h4 class='display-6 mb-4'>$name</h4>
        <p>0 đã bán</p>
        <h5>Mô tả</h5>
        <p class='mb-4'>$description</p>
        <h4>Kích thước</h4>
        <div class='btn_container'>
          <button class='btn-lg-square'>10</button>
          <button class='btn-lg-square'>11</button>
          <button class='btn-lg-square'>12</button>
        </div>
        <br>
        <div id='price_container'>
          <p class='price mb-3'><span>Giá bán: </span>$price VNĐ</p>
        </div>
        <div class='quantity mt-2'>
          <h4 class='mb-2'>Số lượng</h4>
          <div class='btn btn-dark'>-</div>
          <div class='btn btn-dark'>1</div>
          <div class='btn btn-dark'>+</div>
        </div>
        <div class='col-12 mt-5'>
          <button class='btn btn-general w-100 py-3' type='submit'onclick='addProduct($id, $quantity, $price_nonfm)'>Thêm vào giỏ hàng</button>
        </div>
      </div>
        ";
      }
      ?>
    </div>
  </div>
</div>