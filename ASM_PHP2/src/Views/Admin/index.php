<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <?php include 'components/style.php'; ?>

</head>

<body>
<!-- ======= Header ======= -->
<?php include 'components/header.php'; ?>
<!-- End Header -->

<!-- ======= Sidebar ======= -->
<?php include 'components/aside.php'; ?>
<!-- End Sidebar-->

<main id="main" class="main">
    <?php
    $action = "home";
    if (isset($_GET['page']))
        $action = $_GET['page'];

    switch ($action) {
        case "home":
            include 'home.php';
            break;

        case "category-list":
            include 'category/list.php';
            break;
        case "category-add":
            include 'category/add.php';
            break;
        case "product-add":
            include 'product/add.php';
            break;
        case "product-list":
            include 'product/list.php';
            break;
        case "user-list":
            include 'user/list.php';
            break;

        case "logout":
            unset($_SESSION['admin']);
            header("location: index.php");
            break;
        default:
            include 'home.php';
    }
    ?>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<!--<footer id="footer" class="footer">-->
<!--    <div class="copyright">-->
<!--        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved-->
<!--    </div>-->
<!--    <div class="credits">-->
<!--        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
<!--    </div>-->
<!--</footer>-->
<!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<?php include 'components/script.php' ?>

</body>

</html>
