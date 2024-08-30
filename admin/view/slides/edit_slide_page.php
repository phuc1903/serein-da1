<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <!--menu-->
    <?php
    include_once "../admin/view/left_nav.php";
    extract($_REQUEST);
    ?>
    <!--/ menu-->
    <!-- Layout container -->
    <div class="layout-page">

      <!-- / Navbar -->

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Sửa slideshow</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="../controller/manager_slide_controller.php?act=edit&id=<?= $id ?>" enctype="multipart/form-data" method="post" class="tm-edit-product-form">
                      <div class="form-group mb-3">
                        <div class="edit_slide_flex">
                          <input type="text" value="Vị trí" class="col-2 validate edit_slide_label" readonly> 
                          <select class="form-control validate is_admin" id="position" name="position">
                            <?php
                            echo '<option value="main"';
                            echo $get_slide_one['position'] == "main" ? ' selected' : '';
                            echo '>Main</option>';

                            echo '<option value=""';
                            echo $get_slide_one['position'] == "" ? ' selected' : '';
                            echo '>None</option>';
                            ?>
                          </select>
                        </div>
                        <div class="tm-product-img-edit mx-auto">
                          <button class="add_slide_edit" type="button" onclick="chooseImage('fileInput');">
                            <img id="imagePreview" src="<?= $get_slide_one['img'] ?>" alt="" name="img" style="height: 30% !important; width:100% !important; object-fit:cover;" />
                          </button>
                        </div>
                        <div class="custom-file mt-3 mb-3">
                          <input id="fileInput" type="file" name="img" style="display:none;" onchange="previewImage(this, 'imagePreview');" />
                          <input type="button" class="btn_edit_cea680 btn btn-primary btn-block mx-auto" value="SỬA ẢNH" onclick="chooseImage('fileInput');" />
                        </div>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">

                      </div>
                      <!-- <div class="row">
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="created_at">Ngày tạo
                          </label>
                          <input id="created_at" name="created_at" type="date" class="form-control validate" data-large-mode="true" value="<?= $get_slide_one['created_at'] ?>" />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="updated_at">Ngày cập nhật
                          </label>
                          <input id="updated_at" name="updated_at" type="date" class="form-control validate" data-large-mode="true" value="<?= $get_slide_one['updated_at'] ?>" />
                        </div>
                      </div> -->
                      <div class="col-6">
                        <button type="submit" name="slides_edit_submit" class="btn_edit_cea680 btn btn-primary btn-block text-uppercase">CẬP NHẬT</button>
                      </div>
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