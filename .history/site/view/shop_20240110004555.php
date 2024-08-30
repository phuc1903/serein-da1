<!-- Shop search bar start -->
<div class="container-xxl py-5">
  <div class="row">
    <h3 class="sear-head">Tìm kiếm...</h3>
    <div class="col-8 search-bar w3layouts-newsletter mb-4">
      <form action="../controller/shop_controller.php" method="get" class="d-flex">
        <input type="text" placeholder="Nhập tên sản phẩm..." name="keyword" class="form-control" id="search" onchange="search_input_change(this.value)">
        <button class="btn btn-outline-dark" type="submit"><span class="fa fa-search" aria-hidden="true"></span></button>
      </form>
    </div>
    <div class="col-2">
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Lọc theo giá</a>
        <div class="dropdown-menu rounded-0 rounded-bottom m-0">
          <a href="../controller/shop_controller.php?act=filter&min=100000&max=3000000" class="dropdown-item">1.000.000 - 3.000.000 VND</a>
          <a href="../controller/shop_controller.php?act=filter&min=3000000&max=5000000" class="dropdown-item">3.000.000 - 5.000.000 VND</a>
          <a href="../controller/shop_controller.php?act=filter&min=5000000&max=10000000" class="dropdown-item">5.000.000 - 10.000.000 VND</a>
        </div>
      </div>
    </div>
    <div class="col-2">
      <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Loại</a>
        <div class="dropdown-menu rounded-0 rounded-bottom m-0">
          <?php
          foreach ($categories as $category) {
            $category_id = $category['id'];
            $category_name = $category['name'];
            echo "
            <a href='../controller/shop_controller.php?act=search&category=$category_id&name=$category_name' class='dropdown-item'>$category_name</a>
            ";
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Shop search bar end -->
<div id="search_results"></div>