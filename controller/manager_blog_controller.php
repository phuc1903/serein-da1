<?php
include_once '../model/blog_model.php';
extract($_REQUEST);
if (isset($act)) {
    switch ($act) {
        case 'add':
            if (isset($submit)) {
                $blog_name = $_POST['title'];
                $content = $_POST['content'];
                if (isset($_FILES['img'])) {
                    $img_name = $_FILES['img']['name'];
                    $img_tmp = $_FILES['img']['tmp_name'];
                    $path = './assets/upload/';
                    move_uploaded_file($img_tmp, $path . $img_name);
                    $img = $path . $img_name;
                }
                add_blog($blog_name, $content, $img, $_COOKIE['user_name']);
                header('location: ../index.php?page=admin_blogs_manager');
            }
            include_once "../site/view/layouts/header.php";
            include_once "../admin/view/blogs/add_blog_page.php";
            include_once "../site/view/layouts/footer.php";
            break;
        case 'edit':
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                if (isset($submit)) {
                    $blog_name = $_POST['title'];
                    $content = $_POST['content'];
                    if (isset($_FILES['img'])) {
                        $img_name = $_FILES['img']['name'];
                        $img_tmp = $_FILES['img']['tmp_name'];
                        $path = '../assets/upload/';
                        move_uploaded_file($img_tmp, $path . $img_name);
                        $img = $path . $img_name;
                    }
                    edit_blog($blog_name, $content, $img, $id);
                    header('location: ../index.php?page=admin_blogs_manager');
                }
            }
            $blogs = get_blog_by_id($id);
            include_once "../site/view/layouts/header.php";
            include_once "../admin/view/blogs/edit_blog_page.php";
            include_once "../site/view/layouts/footer.php";
            break;
        case 'delete':
            delete_blog($id);
            header('location: ../index.php?page=admin_blogs_manager');
            break;

        default:

            break;
    }
}
