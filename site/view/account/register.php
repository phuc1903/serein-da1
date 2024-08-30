<div class="container-fluid mt-4" style="background: linear-gradient( rgb(254, 230, 197) 0%, rgba(255, 255, 255, 0.853) 100%);">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container mt-4">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Tạo tài khoản</h2>
                            <?php
                            if (isset($_SESSION['empty_error'])) {
                                $err = $_SESSION['empty_error'];
                                echo "
                                        <span style='color:red;'>$err</span>
                                ";
                            }
                            ?>
                            <form action="../controller/register_controller.php" METHOD="POST" enctype="multipart/form-data">
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example1cg">Tên tài khoản</label>
                                    <input type="text" name="user_name" id="form3Example1cg" class="form-control form-control-lg" />
                                    <?php
                                    if (isset($_SESSION['username_error'])) {
                                        $err = $_SESSION['username_error'];
                                        echo " 
                                        <span style='color:red;'>$err</span>";
                                    }
                                    if (isset($_SESSION['username_existed'])) {
                                        $err = $_SESSION['username_existed'];
                                        echo " 
                                        <span style='color:red;'>$err</span>";
                                    }
                                    ?>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example3cg">Email</label>
                                    <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                                    <?php
                                    if (isset($_SESSION['email_error'])) {
                                        $err = $_SESSION['email_error'];
                                        echo " 
                                        <span style='color:red;'>$err</span> <br>";
                                    }
                                    if (isset($_SESSION['email_existed'])) {
                                        $err = $_SESSION['email_existed'];
                                        echo " 
                                        <span style='color:red;'>$err</span>";
                                    }
                                    ?>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cg">Mật khẩu</label>
                                    <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                                    <?php
                                    if (isset($_SESSION['password_error'])) {
                                        $err = $_SESSION['password_error'];
                                        echo " 
                                        <span style='color:red;'>$err</span>";
                                    }
                                    ?>
                                </div>
                                <div class="form-outline mb-4">
                                    <label class="form-label" for="form3Example4cdg">Xác nhận mật khẩu </label>
                                    <input type="password" name="comfirm_password" id="form3Example4cdg" class="form-control form-control-lg" />
                                    <?php
                                    if (isset($_SESSION['confirm_error'])) {
                                        $err = $_SESSION['confirm_error'];
                                        echo " 
                                        <span style='color:red;'>$err</span>";
                                    }
                                    ?>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-dark btn-lg btn-block">Đăng ký</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Bạn đã có tài khoản? <a href="index.php?page=login" class="fw-bold text-body"><u>Đăng nhập</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>