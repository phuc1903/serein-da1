<?php
include_once "pdo.php";
function search($keywords)
{
    $sql = "SELECT * FROM products WHERE name LIKE '%$keywords%'";
    return pdo_query($sql);
}
function search_by_category($category_id)
{
    $sql = "SELECT * FROM products WHERE id_category = ?";
    return pdo_query($sql, $category_id);
}
function search_by_price($min, $max)
{
    $sql = "SELECT * FROM products WHERE price >= ? AND price <= ?";
    return pdo_query($sql, $min, $max);
}
