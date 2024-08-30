<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <title>SEREIN JEWELRY</title>
    <!-- Favicon -->
    <link href="./assets/img/logo_project_1.png" rel="icon" />
    <link rel="stylesheet" href="./assets/css/product-category.css">
    <link rel="stylesheet" href="./assets/vendor/core.css">
    <link rel="stylesheet" href="./assets/vendor/theme-default.css">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap" rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="./assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="./assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <link href="./assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="./assets/css/style.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="./index.php" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="./assets/img/logo_project_1.png" alt="Icon" />
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="./index.php" class="nav-item nav-link">Trang chủ</a>
                <a href="./index.php?page=shop" class="nav-item nav-link ">Shop</a>
                <a href="./index.php?page=about" class="nav-item nav-link">Giới thiệu</a>
                <a href="./index.php?page=blog" class="nav-item nav-link">Blog</a>
                <a href="./index.php?page=contact" class="nav-item nav-link">Liên hệ</a>
                <?php
                extract($_REQUEST);
                if (isset($logout)) {
                    setcookie('user_id', '', time() - 7200);
                    setcookie('user_name', '', time() - 7200);
                    setcookie('is_admin', '', time() - 7200);
                    //Delete infomation
                    setcookie('fullname', '', time() + 7200, '/');
                    setcookie('img', '', time() + 7200, '/');
                    setcookie('phone', '', time() + 7200, '/');
                    setcookie('address', '', time() + 7200, '/');
                    setcookie('sex', '', time() + 7200, '/');
                    header('location: ./index.php');
                }
                if (isset($_COOKIE['user_id']) and isset($_COOKIE['is_admin'])) {
                    $user_id = $_COOKIE['user_id'];
                    $user_name = $_COOKIE['user_name'];
                    $img = $_COOKIE['img'];
                    $is_admin = $_COOKIE['is_admin'];
                    if ($is_admin == 0) {
                        echo "
                        <img src='$img' class='avatar rounded-circle nav-item mt-3 mx-2' style='' alt='Avatar'>
                        <div class='nav-item dropdown'>
                        <a href='' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'>$user_name</a>
                            <div class='dropdown-menu rounded-0 rounded-bottom m-0'>
                                <a href='./index.php?page=userprofile' class='dropdown-item'>Hồ sơ</a>
                                <a href='./index.php?page=history' class='dropdown-item'>Lịch sử đặt hàng</a>
                                <a href='./index.php?logout=true' class='dropdown-item'>Đăng xuất</a>
                            </div>
                        </div>
                        ";
                    } else {
                        echo "
                        <img src='$img' class='avatar rounded-circle nav-item mt-3 mx-2' style='' alt='Avatar'>
                        <div class='nav-item dropdown'>
                        <a href='' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'>$user_name</a>
                            <div class='dropdown-menu rounded-0 rounded-bottom m-0'>
                                <a href='./index.php?page=userprofile' class='dropdown-item'>Hồ sơ</a>
                                <a href='./index.php?page=admin_default' class='dropdown-item'>Trang quản trị</a>
                                <a href='./index.php?page=history' class='dropdown-item'>Lịch sử đặt hàng</a>
                                <a href='./index.php?logout=true' class='dropdown-item'>Đăng xuất</a>
                            </div>
                        </div>
                        ";
                    }
                } else {
                    echo "
                    <div class='nav-item dropdown'>
                        <a href='#' class='nav-link dropdown-toggle' data-bs-toggle='dropdown'>Tài khoản <i class='bi bi-person'></i></a>
                        <div class='dropdown-menu rounded-0 rounded-bottom m-0'>
                            <a href='./index.php?page=login' class='dropdown-item'>Đăng nhập</a>
                            <a href='./index.php?page=register' class='dropdown-item'>Đăng ký</a>
                        </div>
                    </div>
                    ";
                }
                ?>
            </div>
            <a href="./index.php?page=cart" class=" nav-item btn cart_btn">Giỏ hàng<i class="bi bi-cart ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->