<?php
session_start();
include_once '../model/account_process.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' and isset($_POST)) {
    $id = rand(100000, 999999);
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['comfirm_password'];
    $passHash = password_hash($password, PASSWORD_DEFAULT);
    $errors = [];

    //general check
    if (empty($user_name) or empty($email) or empty($password) or empty($confirm_password)) {
        array_push($errors, "Vui lòng điền đầy đủ thông tin !");
        $_SESSION['empty_error'] = "* Vui lòng điền đầy đủ thông tin *";
    }

    if (strlen($password) < 8) {
        array_push($errors, "Mật khẩu phải từ 8 kí tự trở lên !");
        $_SESSION['password_error'] = "* Mật khẩu phải từ 8 kí tự trở lên ! *";
    }
    if ($confirm_password != $password or !$confirm_password) {
        array_push($errors, "Mật khẩu xác nhận không khớp");
        $_SESSION['confirm_error'] = "* Mật khẩu xác nhận không khớp *";
    }

    //check special charaters
    $regex = '/[!@#$%^&*()_+\-=[\]{}|\\;\':",.<>\/?`~\s]/';
    if (preg_match_all($regex, $user_name, $matches) > 0) {
        array_push($errors, "* Tên tài khoản không chứa ký tự đặc biệt hay khoảng trắng! *");
        $_SESSION['username_error'] = "* Tên tài khoản không chứa ký tự đặc biệt hay khoảng trắng! *";
    }

    //email existed check
    $check_email = check_email_existed($email);
    if ($check_email) {
        array_push($errors, "Email đã tồn tại, vui lòng nhập email khác !");
        $_SESSION['email_existed'] = "* Email đã tồn tại, vui lòng nhập email khác ! *";
    }
    //user name existed check
    $check_username = check_name_existed($user_name);
    if ($check_username) {
        array_push($errors, "Tên tài khoản đã tồn tại !");
        $_SESSION['username_existed'] = "* Tên tài khoản đã tồn tại ! *";
    }
    if (count($errors) > 0) {
        header('location: ../index.php?page=register');
    }
    if (count($errors) == 0) {
        register($id, $user_name, $email, $passHash);
        create_user_info($id);
        unset($_SESSION['username_error']);
        unset($_SESSION['username_existed']);
        unset($_SESSION['email_existed']);
        unset($_SESSION['confirm_error']);
        unset($_SESSION['password_error']);
        unset($_SESSION['empty_error']);
        header('location: ../index.php?page=login');
    }
}
