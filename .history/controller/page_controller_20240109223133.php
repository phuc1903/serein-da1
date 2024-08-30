<?php

include_once "./model/product_model.php";
include_once "./model/slider_model.php";
include_once "./model/category_model.php";
include_once "./model/blog_model.php";
include_once "./model/cart_model.php";

extract($_REQUEST);
if (isset($page)) {
    switch ($page) {
            ////////////////////////////////////////////////////////////////////////////////////////////////////
            // User view

        case "shop":
            $new_products = get_limit_products();
            $products_by_category = get_products();
            $categories = get_categories();
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/shop.php";
            include_once "./site/view/products/newproduct.php";
            include_once "./site/view/products/products_by_category.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "detail":
            $detail = get_producct_by_id($product_id);
            $sametype_products = sametype_product($id_category);
            $comments = get_comments($product_id);
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/detail.php";
            include_once "./site/view/products/product_comments.php";
            include_once "./site/view/products/sametype_product.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "blog":
            $blogs = get_blogs();
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/blogs/blog.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "blog_detail":
            $blogs = get_blog_by_id($blog_id);
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/blogs/blog_detail.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "contact":
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/contact.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "about":
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/about.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "login":
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/account/login.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "register":
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/account/register.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "forgot_password":
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/account/forgot_pass.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "check_verify":
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/account/check_verify.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "reset_pass":
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/account/reset_pass.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "userprofile":
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/account/profile.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "cart":
            if (isset($_COOKIE['user_id'])) {
                $cartlist_by_userid = get_cart_by_userid($_COOKIE['user_id']);
            }
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/cart.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "history":
            if (isset($_COOKIE['user_id'])) {
                $bill_list = get_bill($_COOKIE['user_id']);
            }
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/history.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "history_detail":
            if (isset($_COOKIE['user_id'])) {
                $bill_detail = get_bill_detail($bill_id);
            }
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/history_detail.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "checkout":
            if (isset($_COOKIE['user_id'])) {
                $cartlist_by_userid = get_cart_by_userid($_COOKIE['user_id']);
            }
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/checkout.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case "checkout_completed":
            include_once "./site/view/layouts/header.php";
            include_once "./site/view/checkout_complete.php";
            include_once "./site/view/layouts/footer.php";
            break;



            ////////////////////////////////////////////////////////////////////////////////////////////////////
            // Admin view
        case 'admin_default': // product_manager
            include_once "./model/manager_product_model.php";
            $product_list = admin_get_limit_products();
            include_once "./site/view/layouts/header.php";
            include_once "./admin/view/products/manager_product.php";
            include_once "./admin/view/pagination/pagination_product_manager.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case 'admin_users_manager':
            include_once "./model/manager_user_model.php";
            $user_list = get_user_list($_COOKIE['user_id']);
            include_once "./site/view/layouts/header.php";
            include_once "./admin/view/users/manager_user.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case 'admin_categories_manager':
            include_once "./model/manager_category_model.php";
            $dsdm = get_category();
            include_once "./site/view/layouts/header.php";
            include_once "./admin/view/categories/manager_category.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case 'admin_comments_manager':
            include_once "./model/manager_user_model.php";
            $cmts_list = admin_get_limit_cmts();
            include_once "./site/view/layouts/header.php";
            include_once "./admin/view/comments/manager_comment.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case 'admin_blogs_manager':
            $blogs = admin_get_blogs();
            $slides_list = get_slides_list();
            include_once "./site/view/layouts/header.php";
            include_once "./admin/view/blogs/manager_blog.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case 'admin_slideshow_manager':
            include_once "./model/slider_model.php";
            $slides_list = get_slides_list();
            include_once "./site/view/layouts/header.php";
            include_once "./admin/view/slides/manager_slide.php";
            include_once "./site/view/layouts/footer.php";
            break;
        case 'admin_statistic_page':
            include_once "./model/statistic_model.php";
            $result_bill = statistic_total_bill();
            $result_products = statistic_total_products();
            include_once "./site/view/layouts/header.php";
            include_once "./admin/view/statistic_page.php";
            include_once "./site/view/layouts/footer.php";
            break;
        default:
            break;
    }
} else {
    $new_products = get_limit_products();
    $slides = get_slider();
    $categories =  get_Categories_Decs();
    $products_by_category = get_products();
    $blogs = get_blogs();
    include_once "./site/view/layouts/header.php";
    include_once "./site/view/layouts/slide.php";
    include_once "./site/view/products/newproduct.php";
    include_once "./site/view/products/products_by_category.php";
    include_once "./site/view/blogs/blog.php";
    include_once "./site/view/layouts/footer.php";
}
