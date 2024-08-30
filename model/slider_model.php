<?php
include_once "pdo.php";
function get_slider()
{
    $sql = "SELECT * FROM slide LIMIT 3";
    return pdo_query($sql);
}
//admin
function get_slides_list()
{
    $sql = "SELECT * FROM slide ORDER BY created_at DESC";
    return pdo_query($sql);
}

function get_slide_one($id)
{
    $sql = "SELECT * FROM slide WHERE id = ?";
    return pdo_query_one($sql, $id);
}

function edit_slide($img, $position, $id)
{
    $sql = "UPDATE slide
            SET img = ?, position = ?,  updated_at=DEFAULT
            WHERE id = ?";
    return pdo_execute($sql, $img, $position, $id);
}

function add_slide($img, $position)
{
    $sql = "INSERT INTO slide(img,position,created_at,updated_at) VALUES(?,?,DEFAULT,DEFAULT)";
    return pdo_execute($sql, $img, $position);
}

function delete_slide($id)
{
    $sql = "DELETE FROM slide WHERE id=?";
    return pdo_execute($sql, $id);
}
