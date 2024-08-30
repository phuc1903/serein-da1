<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
include_once 'pdo.php';
function get_user_by_email($email)
{
    $sql = "SELECT * FROM users WHERE email = ?";
    return pdo_query($sql, $email);
}
function insert_verify_code($verify_code, $email)
{
    $sql = "UPDATE users SET verify_code = ? WHERE email = ?";
    return pdo_execute($sql, $verify_code, $email);
}
function reset_pass($pass, $email)
{
    $date_time = date('Y-m-d H:i:s', time());
    $sql = "UPDATE users SET password = ?, verify_code = 0,updated_at = ? WHERE email = ?";
    return pdo_execute($sql, $pass, $date_time, $email);
}
