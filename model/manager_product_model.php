<?php
include_once "pdo.php";
extract($_REQUEST);

function admin_count_products()
{
    $sql = "SELECT COUNT(*) FROM products";
    return pdo_query($sql);
}
function admin_get_limit_products()
{
    extract($_REQUEST);
    $products_per_page = 10;
    if (!isset($num_page)) {
        $num_page = 1;
    }
    $take_start = ($num_page - 1) * $products_per_page;
    $sql = "SELECT * FROM products ORDER BY created_at DESC LIMIT $take_start,$products_per_page";
    return pdo_query($sql);
}
function admin_get_product_by_id($id)
{
    $sql = "SELECT*FROM products WHERE id = ?";
    return pdo_query_one($sql, $id);
}
//ACTION
function search($keywords)
{
    $sql = "SELECT * FROM products WHERE name LIKE '%$keywords%'";
    return pdo_query($sql);
}
function product_edit($name, $price, $price_sale, $description, $id_category, $img, $quantity, $id)
{
    $sql = "UPDATE products SET name=?, price=?, price_sale=?, description=?, id_category=?, img=?, default_quantity=? WHERE id=?";
    return pdo_query($sql, $name, $price, $price_sale, $description, $id_category, $img, $quantity, $id);
}

function product_delete($id)
{
    $sql = "DELETE FROM products WHERE id=?";
    return pdo_query($sql, $id);
}

function product_add($name, $img, $price, $description, $price_sale, $quantity, $id_category)
{
    $sql = "INSERT INTO products VALUES('',?,?,?,?,?,?,?,DEFAULT,DEFAULT)";
    return pdo_execute($sql, $name, $img, $price, $description, $price_sale, $quantity, $id_category);
}
