<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
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
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tài khoản /</span>Thông tin tài khoản</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <h5 class="card-header">Hồ sơ chi tiết</h5>
                                <!-- Account -->

                                <hr class="my-0" />
                                <div class="card-body">
                                    <form action="../controller/profile_controller.php" id="formAccountSettings" method="POST" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                                <img id="imagePreview" src="<?= isset($_COOKIE['img']) ? $_COOKIE['img'] : '../assets/img/3.png' ?>" alt="user-avatar" class="d-block rounded" height="100" width="150" name="img" id="uploadedAvatar" />
                                                <div class="button-wrapper">
                                                    <label for="upload" class="btn cart_btn me-2 mb-4" tabindex="0">
                                                        <span class="d-none  d-sm-block" onclick="chooseImage();">Tải lên ảnh mới</span>
                                                        <input id="fileInput" type="file" name="img" class="account-file-input" hidden accept="image/png, image/jpeg" onchange="previewImage(this);" />
                                                    </label>
                                                    <p class="text-muted mb-0">Có thể chọn JPG, GIF hoặc PNG</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="firstName" class="form-label">Họ và tên</label>
                                                <input class="form-control" type="text" id="" name="fullname" value="<?= isset($_COOKIE['fullname']) ? $_COOKIE['fullname'] : '' ?>" placeholder="VD: Nguyễn Văn A" autofocus required />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="lastName" class="form-label">Tên tài khoản</label>
                                                <input class="form-control" type="text" name="user_name" id="" value="<?= isset($_COOKIE['user_name']) ? $_COOKIE['user_name'] : '' ?> " required />
                                            </div>
                                            <div class=" mb-3 col-md-6">
                                                <label for="email" class="form-label">E-mail</label>
                                                <input class="form-control" type="text" id="" readonly name="email" placeholder="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="phoneNumber">Số điện thoại</label>
                                                <div class="input-group input-group-merge">
                                                    <span class="input-group-text">VN +84</span>
                                                    <input type="text" id="" name="phone" class="form-control" value="<?= isset($_COOKIE['phone']) ? $_COOKIE['phone'] : '' ?>" placeholder="VD: 0123456789" pattern="[0-9]{3,11}" title="Vui lòng nhập số điện thoại có từ 3 đến 11 số" />

                                                </div>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="address" class="form-label">Địa chỉ</label>
                                                <input type="text" class="form-control" id="" name="address" value="<?= isset($_COOKIE['address']) ? $_COOKIE['address'] : '' ?>" placeholder="VD: 123 Quận 12, tp.HCM" required />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="state" class="form-label">Giới tính</label>
                                                <input class="form-control" type="text" id="" name="sex" value="<?= isset($_COOKIE['sex']) ? $_COOKIE['sex'] : '' ?>" placeholder="VD: Nam" pattern="^(Nam|NAM|nAM|nam|Nữ|NỮ|nỮ|nữ)$" title="Vui lòng chỉ nhập 'Nam' hoặc 'Nữ'" />
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <button type="submit" class="btn cart_btn">Lưu thay đổi</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /Account -->
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