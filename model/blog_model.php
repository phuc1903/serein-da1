<?php
include_once 'pdo.php';
function get_blogs()
{
    $sql = "SELECT * FROM blogs LIMIT 3";
    return pdo_query($sql);
}

function get_blog_by_id($id)
{
    $sql = "SELECT * FROM blogs WHERE id = ?";
    return pdo_query($sql, $id);
}


//admin
function admin_get_blogs()
{
    $sql = "SELECT * FROM blogs";
    return pdo_query($sql);
}
function add_blog($title, $content, $img, $author)
{
    $sql = "INSERT INTO blogs VALUES('',?,?,?,?,DEFAULT)";
    pdo_execute($sql, $title, $content, $img, $author);
}
function edit_blog($title, $content, $img, $id)
{
    $sql = "UPDATE blogs SET title=?,content=?,img=? WHERE id=?";
    pdo_execute($sql, $title, $content, $img, $id);
}
function delete_blog($id)
{
    $sql = "DELETE FROM blogs WHERE id=?";
    pdo_execute($sql, $id);
}
