<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
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

    <!--  summernote  -->
    <style>
        .ck-editor__editable[role="textbox"] {
            /* Editing area */
            min-height: 200px;
        }

        .ck-content .image {
            /* Block images */
            max-width: 80%;
            margin: 20px auto;
        }
    </style>

    <!-- =======================================================
    * Template Name: NiceAdmin
    * Updated: Jan 09 2024 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
            <img src="public/admin/assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">NiceAdmin</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
            <input type="text" name="query" placeholder="Search" title="Enter search keyword">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

            <li class="nav-item d-block d-lg-none">
                <a class="nav-link nav-icon search-bar-toggle " href="#">
                    <i class="bi bi-search"></i>
                </a>
            </li><!-- End Search Icon-->

            <?php if (isset($_SESSION['user'])): ?>
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#">
                        <img src="public/admin/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block ps-2"><?= $_SESSION['user']['name'] ?></span>
                    </a><!-- End Profile Iamge Icon -->
                </li><!-- End Profile Nav -->

            <?php else: ?>

                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="?url=LoginController/index">
                        <i class="bi bi-person"></i>
                        <span class="d-none d-md-block  ps-2">Đăng nhập</span>
                    </a><!-- End Profile Iamge Icon -->
                </li><!-- End Profile Nav -->

            <?php endif; ?>
        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->
