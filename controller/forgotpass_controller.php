<?php
session_start();

include_once "send_email.php";

extract($_REQUEST);
if (isset($act)) {
    include_once '../model/forgotpass_model.php';
    switch ($act) {
        case 'verify':
            if (isset($_GET['email'])) {
                $email = $_GET['email'];
            }
            foreach (get_user_by_email($email) as $key) {
                $verify_code = $key['verify_code'];
            }
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $user_verify_code = $_POST['verify_code'];
                if ($user_verify_code == $verify_code) {
                    unset($_SESSION['verify_err']);
                    header('location: ../index.php?page=reset_pass&email=' . urlencode($email));
                } else {
                    $_SESSION['verify_err'] = "* Mã xác thực không khớp *";
                    header('location: ../index.php?page=check_verify&email=' . urlencode($email));
                }
            }
            break;
        case 'reset':
            $errors = [];
            if (isset($_GET['email'])) {
                $email = $_GET['email'];
            }
            foreach (get_user_by_email($email) as $key) {
                $old_password = $key['password'];
            }
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $new_password = $_POST['new_password'];
                $new_passHash = password_hash($new_password, PASSWORD_DEFAULT);
                $confirm_password = $_POST['confirm_password'];
                //check old password
                if ($new_password != $confirm_password) {
                    array_push($errors, "Mật khẩu xác nhận không khớp !");
                    $_SESSION['confirm_err'] = "* Mật khẩu xác nhận không khớp ! *";
                }
                if (password_verify($new_password, $old_password)) {
                    array_push($errors, "Mật khẩu mới không trùng với mật khẩu cũ !");
                    $_SESSION['newpass_err'] = "* Mật khẩu mới không trùng với mật khẩu cũ ! *";
                }
                if (count($errors) == 0) {
                    reset_pass($new_passHash, $email);
                    unset($_SESSION['newpass_err']);
                    unset($_SESSION['confirm_err']);
                    header('location: ../index.php?page=login');
                } else {
                    header('location: ../index.php?page=reset_pass&email=' . urlencode($email));
                }
            }
            break;
        default:

            break;
    }
} else {
    include_once '../model/forgotpass_model.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $email = $_POST['email'];
        if (empty($email)) {
            $_SESSION['empty_err'] = "* Vui lòng nhập email của bạn ! *";
            header('location: ../index.php?page=forgot_password');
        }
        $user = get_user_by_email($email);
        if ($user) {
            $verify_code = rand(100000, 999999);
            insert_verify_code($verify_code, $email);
            send_email($email, $verify_code);
        } else {
            $_SESSION['notexisted_err'] = "* Email không tồn tại ! *";
            header('location: ../index.php?page=forgot_password');
        }
    }
}
