<?php
include_once 'pdo.php';
function statistic_total_bill()
{
    $sql = "SELECT SUM(quantity) as total_quantity FROM bill_detail";
    $result = pdo_query($sql);

        return $result[0]['total_quantity'];
}

function statistic_total_products()
{
    $sql = "SELECT SUM(default_quantity) as total_quantity FROM products";
    $result = pdo_query($sql);
    return $result[0]['total_quantity'];
}
