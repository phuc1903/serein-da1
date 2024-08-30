<?php
include_once '../model/account_process.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $sex = $_POST['sex'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    if (is_uploaded_file($_FILES['img']['tmp_name'])) {
        move_uploaded_file($_FILES['img']['tmp_name'], '../assets/upload/' . $_FILES['img']['name']);
        $img = '../assets/upload/' . $_FILES['img']['name'];
    } else {
        $img = $_COOKIE['img'];
    }
    update_info_customer($fullname, $img, $phone, $sex, $address, $_COOKIE['user_id']);
    //Set  infomation
    foreach (get_user_infomation($_COOKIE['user_id']) as $info) {
        setcookie('img', $info['img'], time() + 7200, '/');
        setcookie('fullname', $info['fullname'], time() + 7200, '/');
        setcookie('phone', $info['phone'], time() + 7200, '/');
        setcookie('address', $info['address'], time() + 7200, '/');
        setcookie('sex', $info['sex'], time() + 7200, '/');
    }
    header('location: ../index.php?page=userprofile');
}
