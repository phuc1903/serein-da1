<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Menu -->

    <?php
    include_once "../admin/view/left_nav.php";
    ?>

    <!-- / Menu -->
    <div class="btn_reponsive layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
      <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
        <i class="bx bx-menu bx-sm"></i>
      </a>
    </div>
    <!-- Layout container -->
    <div class="layout-page">
      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Thêm danh mục</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="" method="post" class="tm-edit-product-form" enctype="multipart/form-data">
                      <div class="form-group mb-3">
                        <label for="category-name">Tên danh mục</label>
                        <input id="" name="name" type="text" class="form-control validate" required/>
                      </div>
                      <div class="form-group mb-3">
                        <label for="category-description">Mô tả</label>
                        <textarea name="description" class="form-control validate tm-small" rows="5" required></textarea>
                      </div>
                      <div class="form-group mb-3">
                      <div class="edit_slide_flex">
                        <input type="text" value="Trạng thái" class="col-3 validate edit_slide_label" readonly> 
                          <select class="form-control validate is_admin" id="status" name="status">
                            <option value="Đang hoạt động" selected>Đang hoạt động</option>
                            <option value="Ngừng hoạt động">Ngừng hoạt động</option>
                          </select>
                        </div>
                      </div>
                      <!-- <div class="row">
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="category-date">Ngày tạo</label>
                          <input id="product-date" name="created_at" type="date" class="form-control validate" data-large-mode="true" />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="category-update">Ngày cập nhật</label>
                          <input id="product-update" name="updated_at" type="date" class="form-control validate" data-large-mode="true" />
                        </div>
                      </div> -->

                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                    <div class="tm-product-img-edit mx-auto">
                      <button name="img" class="add-category-image" type="button" onclick="chooseImage('fileInput', 'imagePreview', '../assets/upload/default_avatar.jpg');">
                        <img id="imagePreview" src="../assets/upload/default_avatar.jpg" alt="">
                      </button>
                    </div>
                    <div class="custom-file mt-3 mb-3">
                      <input name="img" id="fileInput" type="file" style="display:none;" onchange="previewImage(this, 'imagePreview', '../assets/upload/default_avatar.jpg');" />
                      <input type="button" class="btn_edit_cea680 btn cart_btn btn-block mx-auto" value="HÌNH ẢNH"  style="border-radius:30px;" onclick="document.getElementById('fileInput').click();" />
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" name="submit" class="btn_edit_cea680 btn btn-block text-uppercase"  style="border-radius:30px;">Thêm</button>
                  </div>
                  </form>
                </div>
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
<!-- / Layout wrapper -->