<?php
session_start();
include_once '../model/account_process.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' and !empty($_POST['email']) and !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_info = login($email);
    if ($user_info) {
        foreach ($user_info as $info) {
            $user_id = $info['id'];
            $email = $info['email'];
            $user_name = $info['user_name'];
            $user_password = $info['password'];
            $is_admin = $info['is_admin'];
        }
        if (password_verify($password, $user_password)) {
            //Set Basic infomation account
            setcookie('user_id', $user_id, time() + 7200, '/');
            setcookie('email', $email, time() + 7200, '/');
            setcookie('user_name', $user_name, time() + 7200, '/');
            //setcookie('avatar', $user_avatar, time() + 7200, '/');
            setcookie('is_admin', $is_admin, time() + 7200, '/');
            //Set Detail info
            $detail_info = get_user_infomation($user_id);
            foreach ($detail_info as $info) {
                setcookie('img', $info['img'], time() + 7200, '/');
                if (!empty($info['fullname']) and !empty($info['phone']) and !empty($info['address']) and !empty($info['sex'])) {
                    setcookie('fullname', $info['fullname'], time() + 7200, '/');
                    setcookie('phone', $info['phone'], time() + 7200, '/');
                    setcookie('address', $info['address'], time() + 7200, '/');
                    setcookie('sex', $info['sex'], time() + 7200, '/');
                }
            }
            unset($_SESSION['empty_err']);
            unset($_SESSION['account_err']);
            unset($_SESSION['password_err']);
            if (isset($_SESSION['cart'])) {
                include_once "../model/cart_model.php";
                foreach ($_SESSION['cart'] as $pro) {
                    $pro_id = $pro['id'];
                    $pro_quantity = $pro['quantity'];
                    add_to_cart($user_id, $pro_id, $pro_quantity);
                    unset($_SESSION['cart']);
                }
            }
            header('location: ../index.php');
        } else {
            header('location: ../index.php?page=login');
            $_SESSION['password_err'] = "* Mật khẩu không khớp ! *";
        }
    } else {
        header('location: ../index.php?page=login');
        $_SESSION['account_err'] = "* Email không tồn tại ! *";
    }
} else {
    header('location: ../index.php?page=login');
    $_SESSION['empty_err'] = "* Hãy nhập đầy đủ thông tin ! *";
}
