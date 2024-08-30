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
                    <h2 class="tm-block-title d-inline-block">Cập nhật bài viết</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <?php foreach ($blogs as $blog) : ?>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                      <form action="" method="post" class="tm-edit-product-form" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                          <label for="blog-name">Tiêu đề</label>
                          <input value="<?= $blog['title'] ?>" name="title" type="text" class="form-control validate" required />
                        </div>
                        <div class="form-group mb-3">
                          <label for="blog-content">Nội dung</label>
                          <textarea value="<?= $blog['content'] ?>" name="content" class="form-control validate tm-small" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                      <div class="tm-product-img-edit mx-auto">
                        <button class="add-blog-image" type="button" onclick="chooseImage('fileInput', 'imagePreview');">
                          <img id="imagePreview" src="<?= $blog['img'] ?>" alt="" width="100%">
                        </button>
                      </div>
                      <div class="custom-file mt-3 mb-3">
                        <input id="fileInput" name="img" type="file" style="display:none;" onchange="previewImage(this, 'imagePreview');" />
                        <input type="button" class="btn_edit_cea680 btn btn-block mx-auto" value="SỬA ẢNH" style="border-radius:30px;" onclick="chooseImage('fileInput', 'imagePreview');" />
                      </div>
                    </div>
                  <?php endforeach; ?>
                  <div class="col-12">
                    <button type="submit" name="submit" class="btn_edit_cea680 btn btn-block text-uppercase" style="border-radius:30px;">CẬP NHẬT</button>
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