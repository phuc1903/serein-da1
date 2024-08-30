<body>
    <!-- Layout wrapper -->
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
                            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
                                <div class="tm-bg-primary-dark tm-block tm-block-products">
                                    <h2 class="tm-block-title mb-4">Quản lý tài khoản người dùng</h2>
                                    <div class="tm-product-table-container">
                                        <table class="table table-hover tm-table-small tm-product-table">
                                            <thead>
                                                <tr>
                                                    <th class="new_edit_pro_cate" scope="col">HỌ VÀ TÊN</th>
                                                    <th class="new_edit_pro_cate" scope="col">HÌNH ẢNH</th>
                                                    <th class="new_edit_pro_cate" scope="col">GIỚI TÍNH</th>
                                                    <th class="new_edit_pro_cate" scope="col">TÊN TÀI KHOẢN</th>
                                                    <th class="new_edit_pro_cate" scope="col">ĐỊA CHỈ</th>
                                                    <th class="new_edit_pro_cate" scope="col">ĐIỆN THOẠI</th>
                                                    <th class="new_edit_pro_cate" scope="col">EMAIL</th>
                                                    <th class="new_edit_pro_cate" scope="col"></th>
                                                    <th class="new_edit_pro_cate" scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($user_list as $user) {
                                                    $user_name = $user['fullname'];
                                                    $user_img = $user['img'];
                                                    $user_sex = $user['sex'];
                                                    $user_user_name = $user['user_name'];
                                                    $user_address = $user['address'];
                                                    $user_phone = $user['phone'];
                                                    $user_email = $user['email'];
                                                    $user_id = $user['user_id'];
                                                    echo '
                                        <tr>
                                            <td class="user-name">' . $user_name . '</td>
                                            <td class="user-img"><img src="' . $user_img . '" alt=""></td>
                                            <td class="user-sex">' . $user_sex . '</td>
                                            <td class="user-username form_full">' . $user_user_name . '</td>
                                            <td class="user-address form_full">' . $user_address . '</td>
                                            <td class="user-phone">' . $user_phone . '</td>
                                            <td class="user-email form_full">' . $user_email . '</td>
                                            <td>
                                                <a href="../controller/manager_user_controller.php?act=edit&user_id=' . $user_id . '" class="tm-product-edit-link">
                                                  <i class="far fa-edit" style="color: #cea680;"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="../controller/manager_user_controller.php?act=delete&user_id=' . $user_id . '" class="tm-product-delete-link">
                                                  <i class="far fa-trash-alt" style="color: #cea680;"></i>
                                                </a>
                                            </td>
                                        </tr>';
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



                    <!-- Footer -->

                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>


</body>