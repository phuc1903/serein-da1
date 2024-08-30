<?php
include_once "../model/manager_product_model.php";
include_once "../model/category_model.php";
extract($_REQUEST);
if (isset($act)) {
    switch ($act) {
        case 'search':
            $product_list = search($keyword);
            return $product_list;
        case 'edit_product_page':
            if (isset($_GET['id']) && ($_GET['id'])) {
                $id = $_GET['id'];
                $product = admin_get_product_by_id($id);
                if ($product) {
                    if (isset($_POST['submit'])) {

                        if (!empty($_FILES['images_product']['name'])) {
                            $img_name = $_FILES['images_product']['name'];
                            move_uploaded_file($_FILES['images_product']['tmp_name'], '../assets//upload/' . $img_name);
                            $img = '../assets/upload/' . $img_name;
                        }

                        product_edit($name, $price, $price_sale, $description, $id_category, $img, $quantity, $id);
                        header('location: ../index.php?page=admin_default');
                    }
                    $product_list = admin_get_limit_products();
                    $categories = get_categories();
                    include_once "../site/view/layouts/header.php";
                    include_once "../admin/view/products/edit_product_page.php";
                    include_once "../site/view/layouts/footer.php";
                }
            }
            break;
        case 'delete_product_page':
            if (isset($_GET['id']) && ($_GET['id'])) {
                $id = $_GET['id'];
                product_delete($id);
                header('location: ../index.php?page=admin_default');
            }
            break;
        case "add_product_page":
            if (isset($submit)) {
                if (!empty($_FILES['images_product']['name'])) {
                    $img_name = $_FILES['images_product']['name'];
                    move_uploaded_file($_FILES['images_product']['tmp_name'], '../assets/upload/' . $img_name);
                }
                $img = '../assets/upload/' . $img_name;
                product_add($name, $img, $price, $description, $price_sale, $quantity, $id_category);
                header('location: ../index.php?page=admin_default');
            }
            $categories = get_categories();
            include_once "../site/view/layouts/header.php";
            include_once "../admin/view/products/add_product_page.php";
            include_once "../site/view/layouts/footer.php";
            break;
    }
}
