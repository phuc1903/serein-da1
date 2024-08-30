<section class="vh-100" style="background: linear-gradient( rgb(254, 230, 197) 0%, rgba(255, 255, 255, 0.853) 100%);">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-6">
                <div class="card" style="border-radius: 1rem;">
                    <div class="d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
                            <form action="./controller/login_controller.php" METHOD="POST" enctype="multipart/form-data">
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <span class="h1 fw-bold mb-0">Đăng nhập</span>
                                </div>
                                <?php
                                if (isset($_SESSION['empty_err'])) {
                                    $err = $_SESSION['empty_err'];
                                    echo "
                                        <span style='color:red;'>$err</span>
                                ";
                                }
                                ?>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example17">Email</label>
                                    <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" />
                                    <?php
                                    if (isset($_SESSION['account_err'])) {
                                        $err = $_SESSION['account_err'];
                                        echo "
                                        <span style='color:red;'>$err</span>
                                ";
                                    }
                                    ?>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form2Example27">Mật khẩu</label>
                                    <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" />
                                    <?php
                                    if (isset($_SESSION['password_err'])) {
                                        $err = $_SESSION['password_err'];
                                        echo "
                                        <span style='color:red;'>$err</span>
                                ";
                                    }
                                    ?>
                                </div>
                                <div class="pt-1 mb-4">
                                    <button class="btn btn-dark btn-lg btn-block" type="submit">Đăng nhập</button>
                                </div>
                                <a class="small text-muted" href="../index.php?page=forgot_password">Quên mật khẩu ?</a>
                                <p class="mb-5 pb-lg-2" style="color: #393f81;">Bạn chưa có tài khoản? <a href="index.php?page=register" style="color: #393f81;">Đăng ký</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>