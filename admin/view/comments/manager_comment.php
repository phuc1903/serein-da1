<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <?php
    include_once "./admin/view/left_nav.php";
    ?>
    <!-- Layout container -->
    <div class="layout-page">
      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
        <div class="container mt-5">
          <div class="row tm-content-row">

            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
              <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
                <h2 class="tm-block-title">Quản lý bình luận</h2>
                <div class="tm-product-table-container">
                  <table class="table tm-table-small tm-product-table table-hover">
                    <thead>
                      <tr>
                        <th class="" scope="col">STT</th>
                        <th class="new_edit_pro_cate edit_slide" scope="col">Tên người dùng</th>
                        <th class="new_edit_pro_cate edit_slide" scope="col">Sản phẩm</th>
                        <th class="new_edit_pro_cate edit_slide" scope="col">Nội dung bình luận</th>
                        <th class="new_edit_pro_cate edit_slide" scope="col">Ngày đăng</th>
                        <th class="new_edit_pro_cate " scope="col"></th>
                        <th class="new_edit_pro_cate " scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $index = 1;
                      foreach ($cmts_list as $cmt) {
                        $id = $cmt[0];
                        $user_name = $cmt['user_name'];
                        $product_name = $cmt['name'];
                        $content = $cmt['content'];
                        $posted_at = $cmt['posted_at'];
                        echo '
                                        <tr>
                                            <td class=""> ' . $index . '</td>
                                            <td class="slideshow-img edit_slide"> ' . $user_name . '</td>
                                            <td class="slideshow-position edit_slide">' . $product_name . '</td>
                                            <td class="slideshow-date edit_slide">' . $content . '</td>
                                            <td class="slideshow-update edit_slide">' . $posted_at . '</td>
                                            <td>
                                                <a href="../controller/manager_user_controller.php?act=delete_cmt&cmt_id=' . $id . '" class="tm-product-delete-link">
                                                    <i class="far fa-trash-alt" style="color: #cea680;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    ';
                        $index++;
                      }
                      ?>


                    </tbody>
                  </table>
                </div>
                <!-- table container -->

              </div>
            </div>
          </div>
        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
      </div>
      <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
</div>
</div>