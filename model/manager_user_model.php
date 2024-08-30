<?php
include_once 'pdo.php';
function get_user_list($id)
{
    $sql = "SELECT * FROM users_info ui INNER JOIN users u ON ui.user_id=u.id WHERE u.id!=? ORDER BY created_at DESC";
    return pdo_query($sql, $id);
}
function get_user_one($user_id)
{
    $sql = "SELECT * FROM users_info ui INNER JOIN users u ON ui.user_id=u.id WHERE ui.user_id=?";
    return pdo_query_one($sql, $user_id);
}
function edit_user($fullname, $sex, $img, $user_name, $phone, $email, $address, $is_admin, $user_id)
{
    $sql = "UPDATE users_info ui 
            INNER JOIN users u ON ui.user_id = u.id
            SET ui.fullname = ?, ui.sex = ?,ui.img=?, u.user_name = ?, ui.phone = ?, u.email = ?, ui.address = ?, u.is_admin = ?
            WHERE ui.user_id = ?";

    return pdo_execute($sql, $fullname, $sex, $img, $user_name, $phone, $email, $address, $is_admin, $user_id);
}
function delete_user_info($user_id)
{
    $sql = "DELETE FROM users_info WHERE user_id = ?";
    return pdo_execute($sql, $user_id);
}
function delete_user($user_id)
{
    $sql = "DELETE FROM users WHERE id = ?";
    return pdo_execute($sql, $user_id);
}



//user's comments
function admin_get_limit_cmts()
{
    extract($_REQUEST);
    $products_per_page = 10;
    if (!isset($num_page)) {
        $num_page = 1;
    }
    $take_start = ($num_page - 1) * $products_per_page;
    $sql = "SELECT * FROM comments
    INNER JOIN products ON products.id = comments.product_id
    INNER JOIN users ON users.id = comments.user_id
    ORDER BY posted_at DESC
    LIMIT $take_start,$products_per_page";
    return pdo_query($sql);
}
function get_cmt_by_id($id)
{
    $sql = "SELECT * FROM comments WHERE id = ?";
    return pdo_query($sql, $id);
}
function delete_cmt($id)
{
    $sql = "DELETE FROM comments WHERE id = ?";
    return pdo_execute($sql, $id);
}
