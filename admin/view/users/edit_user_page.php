<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
    <link rel="stylesheet" href="../assets/css/product-category.css" />
    <!-- Menu -->
    <?php
    include_once "../admin/view/left_nav.php";
    extract($_REQUEST);
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
                    <h2 class="tm-block-title d-inline-block">Cập nhật thông tin người dùng</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="../controller/manager_user_controller.php?act=edit&user_id=<?= $user_id ?>" enctype="multipart/form-data" method="post" class="tm-edit-product-form">
                      <div class="row">
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="user-name">Họ và tên
                          </label>
                          <input id="" name="fullname" type="text" value="<?= $get_user_one['fullname'] ?>" class="form-control validate" required />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="user-sex">Giới tính
                          </label>
                          <input id="" name="sex" type="text" value="<?= $get_user_one['sex'] ?>" class="form-control validate" pattern="^(Nam|NAM|nAM|nam|Nữ|NỮ|nỮ|nữ)$" title="Vui lòng chỉ nhập 'Nam' hoặc 'Nữ'" required />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="user-username">Tên tài khoản
                          </label>
                          <input id="" name="user_name" type="text" value="<?= $get_user_one['user_name'] ?>" class="form-control validate" required />
                        </div>

                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="user-phone">Số điện thoại
                          </label>
                          <input id="" name="phone" type="text" value="<?= $get_user_one['phone'] ?>" class="form-control validate" pattern="[0-9]{3,11}" title="Vui lòng nhập số điện thoại có từ 3 đến 11 số" required />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="user-email">Email</label>
                          <input id="" name="email" type="email" value="<?= $get_user_one['email'] ?>" class="form-control validate" pattern="^[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$" title="Vui lòng nhập địa chỉ email hợp lệ (Ví dụ: abc123@gmail.com)." required />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label for="user-is_admin">Quyền
                          </label>
                          <select class="form-control validate is_admin" id="" name="is_admin">
                            <?php
                            echo '<option value="0"';
                            echo $get_user_one['is_admin'] == 0 ? ' selected' : '';
                            echo '>Người dùng</option>';

                            echo '<option value="1"';
                            echo $get_user_one['is_admin'] == 1 ? ' selected' : '';
                            echo '>Quản trị viên</option>';
                            ?>
                          </select>
                        </div>
                        <div class="form-group mb-3">
                          <label for="user-address">Địa chỉ</label>
                          <textarea class="form-control validate tm-small" name="address" rows="5" required><?= $get_user_one['address'] ?></textarea>
                        </div>
                      </div>

                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                    <div class="tm-product-img-edit mx-auto">
                      <button class="add-product-image" type="button" onclick="chooseImage();">
                        <img id="imagePreview" src="<?= isset($get_user_one['img']) ? $get_user_one['img'] : '../assets/upload/default_avatar.jpg' ?>" alt="">
                      </button>
                    </div>
                    <div class="custom-file mt-3 mb-3">
                      <input id="fileInput" type="file" style="display:none;" name="img" onchange="previewImage(this);" />
                      <input type="button" class="btn_edit_cea680 btn btn-primary btn-block mx-auto" value="Sửa ảnh đại diện" onclick="chooseImage();" />
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" name="user_edit_submit" class="btn_edit_cea680 btn btn-primary btn-block text-uppercase">CẬP NHẬT</button>
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