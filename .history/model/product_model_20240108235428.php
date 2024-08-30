<?php
include_once 'pdo.php';
function get_products()
{
    $sql = "SELECT*FROM products";
    return pdo_query($sql);
}

function get_limit_products()
{
    extract($_REQUEST);
    $products_per_page = 8;
    if (!isset($num_page)) {
        $num_page = 1;
    }
    $take_start = ($num_page - 1) * $products_per_page;
    $sql = "SELECT * FROM products LIMIT $take_start,$products_per_page";
    return pdo_query($sql);
}
function get_product_by_id($id)
{
    $sql = "SELECT*FROM products WHERE id = ?";
    return pdo_query($sql, $id);
}
function sametype_product($id_category)
{
    $sql = "SELECT * FROM products WHERE id_category = ? LIMIT 8";
    return pdo_query($sql, $id_category);
}
//products comments

function post_comment($user_id, $product_id, $content)
{
    $sql = "INSERT INTO comments VALUES ('',?,?,?,DEFAULT)";
    return pdo_execute($sql, $user_id, $product_id, $content);
}
function get_comments($product_id)
{
    $sql = "SELECT * FROM comments 
    INNER JOIN users_info ON comments.user_id = users_info.user_id
    INNER JOIN users ON users.id = comments.user_id
    WHERE product_id=?
    ORDER BY posted_at DESC LIMIT 10";
    return pdo_query($sql, $product_id);
}
//admin 



// function product_delete($id)
// {
//     $sql = "DELETE FROM products WHERE id=?";
//     return pdo_query($sql, $id);
// }

// function product_add($name, $price, $price_sale, $description, $id_category, $img, $quantity)
// {
//     $sql = "INSERT INTO products (name, price, price_sale, description, id_category, img, quantity) VALUES(?,?,?,?,?,?,?)";
//     return pdo_execute($sql, $name, $price, $price_sale, $description, $id_category, $img, $quantity);
// }
