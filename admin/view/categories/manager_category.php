<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <?php
        include_once "./admin/view/left_nav.php";
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
                <div class="container mt-5">
                    <div class="row tm-content-row">

                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
                            <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
                                <h2 class="tm-block-title mb-4">Quản lý danh mục</h2>
                                <a href="../controller/manager_category_controller.php?act=add" class="btn_edit_cea680 btn btn-primary btn-block text-uppercase mb-3">Thêm danh mục</a>
                                <div class="tm-product-table-container">
                                    <table class="table tm-table-small tm-product-table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="new_edit_pro_cate" scope="col">TÊN DANH MỤC</th>
                                                <th class="new_edit_pro_cate" scope="col">HÌNH ẢNH</th>
                                                <th class="new_edit_pro_cate cate_des" scope="col">MÔ TẢ</th>
                                                <th class="new_edit_pro_cate" scope="col">TRẠNG THÁI</th>
                                                <th class="new_edit_pro_cate" scope="col">NGÀY TẠO</th>
                                                <th class="new_edit_pro_cate" scope="col">NGÀY CẬP NHẬT</th>
                                                <th class="new_edit_pro_cate" scope="col"></th>
                                                <th class="new_edit_pro_cate" scope="col"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- <?php foreach ($dsdm as $dm) : ?> -->
                                            <tr>
                                                <td class="category-name"><?= $dm['name'] ?></td>
                                                <td class="category-img">
                                                    <img src="<?= $dm['img'] ?>" alt="" width="100%">
                                                </td>
                                                <td class="category-description"><?= $dm['description'] ?></td>
                                                <td class="category-status"><?= $dm['status'] ?></td>
                                                <td class="category-date"><?= $dm['created_at'] ?></td>
                                                <td class="category-update"><?= $dm['updated_at'] ?></td>
                                                <td>
                                                    <a href="../controller/manager_category_controller.php?act=edit&id=<?= $dm['id'] ?>" class="tm-category-edit-link">
                                                        <i class="far fa-edit" style="color: #cea680;"></i>
                                                    </a>
                                                </td>
                                                <td>

                                                    <a href="../controller/manager_category_controller.php?act=delete&id=<?= $dm['id'] ?>" class="tm-category-delete-link">
                                                        <i class="far fa-trash-alt" style="color: #cea680;"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <!-- <?php endforeach; ?> -->
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