<?php
require_once "../model/product_model.php";
extract($_REQUEST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    post_comment($_COOKIE['user_id'], $product_id, $comment_content);
    header('location: ../index.php?page=detail&product_id=' . $product_id . '&id_category=' . $id_category);
}
