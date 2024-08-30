<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <?php
    include_once "./admin/view/left_nav.php";
    extract($_REQUEST);
    ?>
    <div class="btn_reponsive layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>
    <div class="layout-page">
      <div class="content-wrapper">
        <div class="container-fluid mt-5">
          <div class="row tm-content-row">
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
              <div class="tm-bg-primary-dark tm-block tm-block-products">
                <h2 class="tm-block-title mb-4">Quản lý sản phẩm</h2>
                <a href="../controller/manager_product_controller.php?act=add_product_page" class="btn btn-primary btn-block text-uppercase mb-3" style="background-color:#cea680 !important;border:none !important;">Thêm sản phẩm</a>
                <div class="tm-product-table-container">
                  <table class="table table-hover tm-table-small tm-product-table edit_table">
                    <thead>
                      <tr>
                        <th class="new_edit_pro_cate" scope="col">STT</th>
                        <th class="new_edit_pro_cate" scope="col">TÊN SẢN PHẨM</th>
                        <th class="new_edit_pro_cate" scope="col">HÌNH ẢNH</th>
                        <th class="new_edit_pro_cate" scope="col">MÔ TẢ</th>
                        <th class="new_edit_pro_cate" scope="col">DANH MỤC</th>
                        <th class="new_edit_pro_cate" scope="col">GIÁ</th>
                        <th class="new_edit_pro_cate" scope="col">GIÁ KHUYẾN MÃI</th>
                        <th class="new_edit_pro_cate" scope="col">Số lượng</th>
                        <th class="new_edit_pro_cate" scope="col"></th>
                        <th class="new_edit_pro_cate" scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $index = 1;
                      foreach ($product_list as $item) {
                        extract($item);
                        echo '<tr>
                            <td class="product-name">' . $index . '</td>
                            <td class="product-name">' . $name . '</td>
                            <td class="product-img"><img src="' . $img . '" alt="" width="100%"></td>
                            <td class="product-description">' . $description . '</td>
                            <td class="product-category">' . $id_category . '</td>
                            <td class="product-price">' . $price . '</td>
                            <td class="product-sell-off">' . $price_sale . '</td>
                            <td class="product-quantityy">' . $default_quantity . '</td>
                            <td>
                                <a href="../controller/manager_product_controller.php?act=edit_product_page&id=' . $id . '" class="tm-product-edit-link">
                                <i class="far fa-edit" style="color: #cea680;"></i>
                              </a>
                            </td>
                            <td>
                            <a href="../controller/manager_product_controller.php?act=delete_product_page&id=' . $id . '" class="tm-product-delete-link">
                            <i class="far fa-trash-alt" style="color: #cea680;"></i>
                            </a>
                          </td>
                          </tr>';
                        $index++;
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>