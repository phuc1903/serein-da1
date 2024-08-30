<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");

include_once 'pdo.php';
////////////////////////////////////////////////////////////////////////////////////////////////////////

//cart action
function get_cart_by_userid($user_id)
{
    $sql = "SELECT * FROM cart INNER JOIN products ON cart.product_id = products.id WHERE cart.user_id = ?";
    return pdo_query($sql, $user_id);
}
function add_to_cart($user_id, $product_id, $quantity)
{
    $sql = "INSERT INTO cart VALUES ('',?,?,?)";
    return pdo_execute($sql, $user_id, $product_id, $quantity);
}
function check_product_in_cart($product_id)
{
    $sql = "SELECT * FROM cart WHERE product_id = ?";
    return pdo_query($sql, $product_id);
}
function increase_quantity_by_check($product_id)
{
    $sql = "UPDATE cart SET quantity = quantity + 1 WHERE product_id = ?";
    pdo_execute($sql, $product_id);
}
function delete_cart_product($product_id, $user_id)
{
    $sql = "DELETE FROM cart WHERE product_id = ? AND user_id = ?";
    return pdo_execute($sql, $product_id, $user_id);
}
function check_quantity($product_id)
{
    $sql = "SELECT * FROM cart WHERE quantity = 1 and product_id = ?";
    return pdo_query($sql, $product_id);
}
function quantity_set_default($product_id)
{
    $sql = "UPDATE cart SET quantity = 1 WHERE product_id = ?";
    return pdo_execute($sql, $product_id);
}
function increase_quantity($product_id)
{
    $sql = "UPDATE cart SET quantity = quantity + 1 WHERE product_id =?";
    return pdo_execute($sql, $product_id);
}
function decrease_quantity($product_id)
{
    $sql = "UPDATE cart SET quantity = quantity - 1 WHERE product_id =?";
    return pdo_execute($sql, $product_id);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////

//checkout

function insert_info_receiver($fullname, $sex, $addr, $phone_num, $user_id)
{
    $sql = "INSERT INTO user_info VALUES ('',?,?,?,?,?)";
    return pdo_execute($sql, $fullname, $sex, $addr, $phone_num, $user_id);
}
function save_bill($bill_id, $user_id, $total_value, $date_time)
{
    $sql = "INSERT INTO bill VALUES (?,?,?,?)";
    return pdo_execute($sql, $bill_id, $user_id, $total_value, $date_time);
}
function update_default_quantity($quantity, $product_id)
{
    $sql = "UPDATE products SET default_quantity = default_quantity - ? WHERE id =?";
    return pdo_execute($sql, $quantity, $product_id);
}
function move_cart($product_id, $quantity, $price, $bill_id)
{
    $sql = "INSERT INTO bill_detail VALUES ('',?,?,?,?)";
    return pdo_execute($sql, $product_id, $quantity, $price, $bill_id);
}
function remove_cart($user_id)
{
    $sql = "DELETE FROM cart WHERE user_id = ?";
    return pdo_execute($sql, $user_id);
}
////////////////////////////////////////////////////////////////////////////////////////////////////////

//history
function get_bill($user_id)
{
    $sql = "SELECT * FROM bill WHERE user_id = ? ORDER BY completed_at DESC";
    return pdo_query($sql, $user_id);
}
function get_bill_detail($bill_id)
{
    $sql = "SELECT * FROM bill_detail
    INNER JOIN products ON products.id = bill_detail.product_id
    WHERE bill_detail.bill_id = ?
    ORDER BY bill_detail.price ASC";
    return pdo_query($sql, $bill_id);
}
function get_quantity_products($bill_id)
{
    $sql = "SELECT * FROM bill_detail WHERE bill_id = ?";
    return pdo_query($sql, $bill_id);
}
