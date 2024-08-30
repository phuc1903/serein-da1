<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <?php
    include_once "../admin/view/left_nav.php";
    extract($_REQUEST);
    ?>
    <!-- Menu -->

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
                    <h2 class="tm-block-title d-inline-block">Viết bài mới</h2>
                  </div>
                </div>
                <form action="../controller/manager_blog_controller.php?act=add" method="post" class="tm-edit-product-form" enctype="multipart/form-data">
                  <div class="row tm-edit-product-row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                      <div class="form-group mb-3">
                        <label for="name">Tiều đề bài viết</label>
                        <input id="name" name="title" type="text" value="" class="form-control validate" required />
                      </div>
                      <div class="form-group mb-3">
                        <label for="description">Nội dung</label>
                        <textarea class="form-control validate tm-small" rows="15" name="content" required></textarea>
                      </div>
                      <div class="row">
                        <div class="col-12">
                          <button name="submit" type="submit" style="border-radius:30px;" class="btn_edit_cea680 btn btn-block text-uppercase">Đăng</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                      <div class="tm-product-img-edit mx-auto">
                        <button class="add-product-image" type="button" onclick="chooseImage('fileInput', 'imagePreview');">
                          <img id="imagePreview" src="../assets/upload/default_avatar.jpg" alt="">
                        </button>
                      </div>
                      <div class="custom-file mt-3 mb-3">
                        <input id="fileInput" type="file" name="img" style="display:none;" onchange="previewImage(this, 'imagePreview');" />
                        <input type="button" class="btn_edit_cea680 btn btn-block mx-auto" name="img" value="ẢNH ĐẠI DIỆN" style="border-radius:30px;" onclick="chooseImage('fileInput', 'imagePreview');" />
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
  </div>
</div>