<?php
include_once "pdo.php";
function get_category()
{
    $sql = "SELECT * FROM categories";
    return pdo_query($sql);
}
function get_category_by_id($id)
{
    $sql = "SELECT * FROM categories WHERE id = ?";
    return pdo_query_one($sql, $id);
}
function add_category($category_name, $img, $description, $status)
{
    $sql = "INSERT INTO categories(name,img,description,status,created_at,updated_at) VALUE (?,?,?,?,DEFAULT,DEFAULT)";
    return pdo_execute($sql, $category_name, $img, $description, $status);
}

function edit_category($category_name, $img, $description, $status, $category_id)
{
    $sql = "UPDATE categories SET name=?, img = ?, description=?, status=? WHERE id=?";
    return pdo_execute($sql, $category_name, $img, $description, $status, $category_id);
}
function delete_category($category_id)
{
    $sql = "DELETE FROM categories WHERE id = ?";
    return pdo_execute($sql, $category_id);
}
