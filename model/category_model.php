<?php
include_once "pdo.php";
function get_categories()
{
    $sql = "SELECT * FROM categories";
    return pdo_query($sql);
}

function get_categories_decs()
{
    $sql = "SELECT * FROM categories ORDER BY created_at ASC LIMIT 3";
    return pdo_query($sql);
}
