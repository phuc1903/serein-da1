<?php
include_once '../model/manager_category_model.php';
extract($_REQUEST);
if (isset($act)) {
    switch ($act) {
        case 'add':
            if (isset($submit)) {
                $category_name = $_POST['name'];
                $description = $_POST['description'];
                $status = $_POST['status'];
                // $created_at = $_POST['created_at'];
                // $updated_at = $_POST['updated_at'];
                if (isset($_FILES['img'])) {
                    $img_name = $_FILES['img']['name'];
                    $img_tmp = $_FILES['img']['tmp_name'];
                    $path = '../assets/upload/';
                    move_uploaded_file($img_tmp, $path . $img_name);
                    $img = $path . $img_name;
                }
                add_category($category_name, $img, $description, $status);
                header('location: ../index.php?page=admin_categories_manager');
            }
            include_once "../site/view/layouts/header.php";
            include_once "../admin/view/categories/add_category_page.php";
            include_once "../site/view/layouts/footer.php";
            break;
        case 'edit':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $dm = get_category_by_id($id);
                if (isset($submit)) {
                    $category_name = $_POST['name'];
                    $description = $_POST['description'];
                    $status = $_POST['status'];
                    if (isset($_FILES['img'])) {
                        $img_name = $_FILES['img']['name'];
                        $img_tmp = $_FILES['img']['tmp_name'];
                        $path = '../assets/upload/';
                        move_uploaded_file($img_tmp, $path . $img_name);
                        $img = $path . $img_name;
                    }
                    edit_category($category_name, $img, $description, $status, $id);
                    header('location: ../index.php?page=admin_categories_manager');
                }
            }
            include_once "../site/view/layouts/header.php";
            include_once "../admin/view/categories/edit_category_page.php";
            include_once "../site/view/layouts/footer.php";
            break;
        case 'delete':
            delete_category($id);
            header('location: ../index.php?page=admin_categories_manager');
            break;

        default:

            break;
    }
}
