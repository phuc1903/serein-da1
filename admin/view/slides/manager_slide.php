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
                <h2 class="tm-block-title">Quản lý slideshow</h2>
                <div class="tm-product-table-container">
                  <a href="../controller/manager_slide_controller.php?act=add" class="btn_edit_cea680 btn btn-primary btn-block text-uppercase mb-3">Thêm slideshow</a>
                  <table class="table tm-table-small tm-product-table table-hover">
                    <thead>
                      <tr>
                        <th class="new_edit_pro_cate edit_slide" scope="col">HÌNH ẢNH</th>
                        <th class="new_edit_pro_cate edit_slide" scope="col">VỊ TRÍ</th>
                        <th class="new_edit_pro_cate edit_slide" scope="col">NGÀY TẠO</th>
                        <th class="new_edit_pro_cate edit_slide" scope="col">NGÀY CẬP NHẬT</th>
                        <th class="new_edit_pro_cate " scope="col">&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($slides_list as $slide) {
                        $id = $slide['id'];
                        $slide_img = $slide['img'];
                        $slide_position = $slide['position'];
                        $slide_created_at = $slide['created_at'];
                        $slide_updated_at = $slide['updated_at'];
                        echo '
                                
                                        <tr>
                                            <td class="slideshow-img edit_slide"><img src="' . $slide_img . '" alt="" width="100%" style="object-fit:cover;max-width:234px !important;max-height:100px !important;"></td>
                                            <td class="slideshow-position edit_slide">' . $slide_position . '</td>
                                            <td class="slideshow-date edit_slide">' . $slide_created_at . '</td>
                                            <td class="slideshow-update edit_slide">' . $slide_updated_at . '</td>
                                            <td>
                                                <a href="../controller/manager_slide_controller.php?act=edit&id=' . $id . '" class="tm-product-edit-link">
                                                    <i class="far fa-edit" style="color: #cea680;"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="../controller/manager_slide_controller.php?act=delete&id=' . $id . '" class="tm-product-delete-link">
                                                    <i class="far fa-trash-alt" style="color: #cea680;"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    ';
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