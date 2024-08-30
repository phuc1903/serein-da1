<?php
extract($_REQUEST);
include_once '../model/slider_model.php';
if (isset($act)) {
    switch ($act) {
        case 'add':
            if (isset($slide_add_submit)) {
                $position = $_POST['position'];
                $created_at = $_POST['created_at'];
                $updated_at = $_POST['updated_at'];
                if (isset($_FILES['img'])) {
                    $img_name = $_FILES['img']['name'];
                    $img_tmp = $_FILES['img']['tmp_name'];
                    $path = '../assets/upload/';
                    move_uploaded_file($img_tmp, $path . $img_name);
                    $img = $path . $img_name;
                }
                add_slide($img, $position);
                header('location: ../index.php?page=admin_slideshow_manager');
            }
            include_once "../site/view/layouts/header.php";
            include_once "../admin/view/slides/add_slide_page.php";
            include_once "../site/view/layouts/footer.php";
            break;
        case 'edit':
            $get_slide_one = get_slide_one($id);
            if (isset($slides_edit_submit)) {
                move_uploaded_file($_FILES['img']['tmp_name'], '../assets/upload/' . $_FILES['img']['name']);
                $img = '../assets/upload/' . $_FILES['img']['name'];
                edit_slide($img, $position, $id);
                header('location:../index.php?page=admin_slideshow_manager');
            }
            include_once "../site/view/layouts/header.php";
            include_once "../admin/view/slides/edit_slide_page.php";
            include_once "../site/view/layouts/footer.php";
            break;
        case 'delete':
            delete_slide($id);
            header('location:../index.php?page=admin_slideshow_manager');
            break;
        default:

            break;
    }
}
