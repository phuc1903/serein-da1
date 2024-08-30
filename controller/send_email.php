<?php

use Project_1\PHPMailer\PHPMailer;
use Project_1\PHPMailer\SMTP;
use Project_1\PHPMailer\Exception;

require '../PHPMailer-master/src/PHPMailer.php';
require '../PHPMailer-master/src/Exception.php';
require '../PHPMailer-master/src/SMTP.php';
function send_email($email, $verify_code)
{
    $mail = new PHPMailer(true);
    $subject = "HTML email";
    $headers = "";
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'nguyenvankykar98k@gmail.com';
        $mail->Password   = 'mquekdleujdmkegt';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('nguyenvankykar98k@gmail.com', 'SEREIN JEWLRY ADMIN');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Verifycode Forgot Password';
        $mail->Body    = "Your verifycode: $verify_code";
        $mail->send();
        unset($_SESSION['empty_err']);
        unset($_SESSION['notexisted_err']);
        header('location: ../index.php?page=check_verify&email=' . urlencode($email));
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
function send_email_checkout($email, $bill_id)
{
    $mail = new PHPMailer(true);
    $subject = "HTML email";
    $headers = "";
    try {
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'nguyenvankykar98k@gmail.com';
        $mail->Password   = 'mquekdleujdmkegt';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;
        $mail->setFrom('nguyenvankykar98k@gmail.com', 'SEREIN JEWLRY');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'Serein Jewelry | Dat hang thanh cong !';
        $mail->Body    = "Mã đơn hàng: " . $bill_id . '<br> Xem chi tiết tại: sereinjewelry.mobileaz.id.vn';
        $mail->send();
        unset($_SESSION['empty_err']);
        unset($_SESSION['notexisted_err']);
        header('location: ../index.php?page=checkout_completed');
        exit();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
