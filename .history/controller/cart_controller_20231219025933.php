<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
$date_time = date('Y-m-d H:i:s', time());


include_once "send_email.php";
include_once '../model/cart_model.php';


session_start();
extract($_REQUEST);
if (isset($_POST['action'])) $action = $_POST['action'];
switch ($action) {
    case 'add':
        $id = $_POST['id'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];

        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as &$product) {
                if ($product['id'] == $id) {
                    $product['quantity'] += 1;
                    return;
                }
            }
        }
        $_SESSION['cart'][] = [
            'id' => $id,
            'quantity' => $quantity,
            'price' => $price,
        ];
        if (isset($_COOKIE['user_id']) and isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $pro) {
                $pro_id = $pro['id'];
                $pro_quantity = $pro['quantity'];
                check_product_in_cart($pro_id) ? increase_quantity_by_check($pro_id) : add_to_cart($_COOKIE['user_id'], $pro_id, $pro_quantity);
                unset($_SESSION['cart']);
            }
        }

        break;
    case 'delete':
        if (isset($_COOKIE['user_id'])) {
            $user_id = $_COOKIE['user_id'];
            delete_cart_product($product_id, $user_id);
        }
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION["cart"] as $key => $product) {
                if ($product["id"] == $id) {
                    unset($_SESSION["cart"][$key]);
                    return;
                }
            }
        }
        header('location: ../index.php?page=cart');
        break;
    case 'increase':
        increase_quantity($product_id);
        header('location: ../index.php?page=cart');
        break;
    case 'decrease':
        if (isset($_COOKIE['user_id'])) $user_id = $_COOKIE['user_id'];
        if (check_quantity($product_id)) {
            quantity_set_default($product_id);
        } else {
            decrease_quantity($product_id);
        }
        header('location: ../index.php?page=cart');
        break;
    case 'checkout':
        $bill_id = rand(100000, 999999);
        save_bill($bill_id, $_COOKIE['user_id'], $_SESSION['total_value'], $date_time);
        $cart_list_by_userid = get_cart_by_userid($_COOKIE['user_id']);
        foreach ($cart_list_by_userid as $cart) {
            update_default_quantity($cart['quantity'], $cart['product_id']);
            move_cart($cart['product_id'], $cart['quantity'], $cart['price'], $bill_id);
        }
        remove_cart($_COOKIE['user_id']);
        send_email_checkout($_COOKIE['email'], $bill_id);
        header('location: ../index.php?page=checkout_completed');
        break;
    default:
        # code...
        break;
}
