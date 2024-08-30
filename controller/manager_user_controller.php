<?php
extract($_REQUEST);
include_once '../model/manager_user_model.php';
if (isset($act)) {
    switch ($act) {
        case 'edit':
            $get_user_one = get_user_one($user_id);
            if (isset($user_edit_submit)) {
                move_uploaded_file($_FILES['img']['tmp_name'], '../assets/upload/' . $_FILES['img']['name']);
                $img = '../assets/upload/' . $_FILES['img']['name'];
                edit_user($fullname, $sex, $img, $user_name, $phone, $email, $address, $is_admin, $user_id);
                header('location:../index.php?page=admin_users_manager');
            }
            include_once "../site/view/layouts/header.php";
            include_once "../admin/view/users/edit_user_page.php";
            include_once "../site/view/layouts/footer.php";
            break;
        case 'delete':
            delete_user_info($user_id);
            delete_user($user_id);
            header('location:../index.php?page=admin_users_manager');
            break;
        case 'delete_cmt':
            delete_cmt($cmt_id);
            header('location:../index.php?page=admin_comments_manager');
            break;
        default:

            break;
    }
}
