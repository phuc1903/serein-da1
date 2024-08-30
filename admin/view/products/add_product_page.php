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
                                        <h2 class="tm-block-title d-inline-block">Thêm sản phẩm</h2>
                                    </div>
                                </div>
                                <form action="../controller/manager_product_controller.php?act=add_product_page" method="post" class="tm-edit-product-form" enctype="multipart/form-data">
                                    <div class="row tm-edit-product-row">
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="form-group mb-3">
                                                <label for="name">Tên sản phẩm</label>
                                                <input id="name" name="name" type="text" value="" class="form-control validate" required />
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="description">Mô tả</label>
                                                <textarea class="form-control validate tm-small" rows="5" name="description" required></textarea>
                                            </div>
                                            <div class="form-group mb-3">
                                                <div class="edit_slide_flex">
                                                    <input type="text" value="Danh mục" class="col-3 validate edit_slide_label" readonly> 
                                                    <select class="form-control validate is_admin" id="category" name="id_category">
                                                        <?php foreach ($categories as $item) : ?>
                                                            <?= extract($item); ?>
                                                            <option value="<?= $id ?>"><?= $name ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                                    <label for="price">Giá</label>
                                                    <input id="price" name="price" type="number" value="<?= $price ?>" placeholder="1.000.000" class="form-control validate" required min="0"/>
                                                </div>
                                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                                    <label for="price_sale">Giá khuyến mãi</label>
                                                    <input id="price_sale" name="price_sale" type="number" value="<?= $price_sale ?>" placeholder="500.000" class="form-control validate" required min="0"/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                                    <label for="product-quantity">Số lượng</label>
                                                    <input id="product-quantity" name="quantity" type="number" placeholder="20" class="form-control validate" required min="0"/>
                                                </div>
                                                <div class="col-12">
                                                    <button name="submit" type="submit" style="border-radius:30px;" class="btn_edit_cea680 btn btn-block text-uppercase">Thêm sản phẩm</button>
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
                                                <input id="fileInput" type="file" name="images_product" style="display:none;" onchange="previewImage(this, 'imagePreview');" />
                                                <input type="button" class="btn_edit_cea680 btn btn-block mx-auto" name="img" value="THÊM ẢNH" style="border-radius:30px;" onclick="chooseImage('fileInput', 'imagePreview');" />
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