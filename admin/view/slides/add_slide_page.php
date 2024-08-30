<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!-- Menu -->
    <?php
    include_once "../admin/view/left_nav.php";
    extract($_REQUEST);
    ?>
    <!--/ Menu -->
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
                    <h2 class="tm-block-title d-inline-block">Thêm slideshow</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                  <form action="../controller/manager_slide_controller.php?act=add" enctype="multipart/form-data" method="post" class="tm-edit-product-form">
                    <div class="form-group mb-3">
                      <div class="edit_slide_flex">
                          <input type="text" value="Vị trí" class="col-2 validate edit_slide_label" readonly> 
                          <select class="form-control validate is_admin" id="position" name="position">
                            <option value="main" selected>Main</option>
                            <option value="">None</option>
                          </select>
                      </div>
                      <div class="tm-product-img-edit mx-auto">
                        <button class="add_slide_edit" type="button" onclick="chooseImage('fileInput');">
                          <img id="imagePreview" src="../assets/upload/default_avatar.jpg" name="img" alt="">
                        </button>
                      </div>
                      <div class="custom-file mt-3 mb-3">
                        <input id="fileInput" type="file" name="img" style="display:none;" onchange="previewImage(this, 'imagePreview');" />
                        <input type="button" class="btn_edit_cea680 btn btn-primary btn-block mx-auto" value="THÊM ẢNH" onclick="chooseImage('fileInput');" />
                      </div>
                    </div>
                    <!-- <div class="row">
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="created_at">Ngày tạo
                          </label>
                          <input id="created_at" name="created_at" type="date" class="form-control validate" data-large-mode="true" />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="updated_at">Ngày cập nhật
                          </label>
                          <input id="updated_at" name="updated_at" type="date" class="form-control validate" data-large-mode="true" />
                        </div>
                      </div> -->

                    <div class="col-12">
                      <button type="submit" name="slide_add_submit" class="btn_edit_cea680 btn btn-primary btn-block text-uppercase">Thêm Slide</button>
                    </div>
                  </form>
                  </div>
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