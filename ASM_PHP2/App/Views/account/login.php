<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Đăng nhập - NiceAdmin </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="public/admin/assets/img/favicon.png" rel="icon">
    <link href="public/admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="public/admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="public/admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="public/admin/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Jan 09 2024 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<main>
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="public/admin/assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">NiceAdmin</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Đăng nhập</h5>
                                    <p class="text-center small  <?= $_SESSION['error']['mgs'] ? 'text-danger' : '' ?> "><?= $_SESSION['error']['mgs'] ?? 'Nhập email & mật khẩu để đăng nhập' ?></p>
                                </div>

                                <form class="row g-3" action="?url=LoginController/store" method="POST">

                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Email</label>
                                        <input type="text" name="email" class="form-control" id="yourEmail">
                                        <small class="text-danger"><?= $_SESSION['error']['email'] ?? '' ?></small>
                                        <!-- <div class="input-group has-validation">
                                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                                          <input type="text" name="username" class="form-control" id="yourUsername" required>
                                          <div class="invalid-feedback">Please enter your username.</div>
                                        </div> -->
                                    </div>

                                    <div class="col-12 mb-4">
                                        <label for="yourPassword" class="form-label">Mật khẩu</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword">
                                        <small class="text-danger"><?= $_SESSION['error']['password'] ?? '' ?></small>
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit" name="submit">Đăng nhập</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Bạn chưa có tài khoản? <a
                                                    href="?url=RegisterController/index">Tạo tài khoản</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>

                        <div class="credits">
                            <a href="?url=ForgotpasswordController/index">Quên mật khẩu</a>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
</main><!-- End #main -->
<?php unset($_SESSION['error']); ?>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="public/admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="public/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="public/admin/assets/vendor/chart.js/chart.umd.js"></script>
<script src="public/admin/assets/vendor/echarts/echarts.min.js"></script>
<script src="public/admin/assets/vendor/quill/quill.min.js"></script>
<script src="public/admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="public/admin/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="public/admin/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="public/admin/assets/js/main.js"></script>

</body>

</html>