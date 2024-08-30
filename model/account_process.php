<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
include_once "pdo.php";

////////////////////////////////////////////////////////////////////////////////////////////////////////

//Login and Register
function login($email)
{
    $sql = "SELECT * FROM users WHERE email = ?";
    return pdo_query($sql, $email);
}

function register($id, $user_name, $email, $password)
{
    $date_time = date('Y-m-d H:i:s', time());
    $sql = "INSERT INTO users VALUES (?,?,?,?,'','',?,?)";
    return pdo_execute($sql, $id, $user_name, $email, $password, $date_time, $date_time);
}
////////////////////////////////////////////////////////////////////////////////////////////////////////

//Check register
function check_email_existed($email)
{
    $sql = "SELECT * FROM users WHERE email = ?";
    return pdo_query($sql, $email);
}
function check_name_existed($user_name)
{
    $sql = "SELECT * FROM users WHERE user_name = ?";
    return pdo_query($sql, $user_name);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////

// user infomation
function create_user_info($id)
{
    $sql = "INSERT INTO users_info VALUES ('',DEFAULT,NULL,NULL,NULL,NULL,?)";
    return pdo_execute($sql, $id);
}
function get_user_infomation($user_id)
{
    $sql = "SELECT * FROM users_info ui 
            INNER JOIN users u ON ui.user_id = u.id
            WHERE ui.user_id = ?";

    return pdo_query($sql, $user_id);
}
function update_info_customer($fullname, $img, $phone, $sex, $address, $user_id)
{
    $sql = "UPDATE users_info
            SET fullname = ?, img = ?, phone = ?, sex = ?, address = ?
            WHERE user_id = ?";

    return pdo_execute($sql, $fullname, $img, $phone, $sex, $address, $user_id);
}
function check_data_users_info($user_id)
{
    $sql = "SELECT * FROM users_info WHERE user_id = ?";
    return pdo_query($sql, $user_id);
}
