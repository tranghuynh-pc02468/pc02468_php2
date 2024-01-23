<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="../../../public/client/favicon.png">

    <meta name="description" content=""/>
    <meta name="keywords" content="bootstrap, bootstrap4"/>

    <!-- Bootstrap CSS -->
    <link href="../../../public/client/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="../../../public/client/css/tiny-slider.css" rel="stylesheet">
    <link href="../../../public/client/css/style.css" rel="stylesheet">
    <title>T-Home</title>
</head>

<body>

<!-- Start Header/Navigation -->
<?php include 'components/header.php'; ?>
<!-- End Header/Navigation -->

<!-- Start Hero Section -->
    <?php
    $action = "home";
    if (isset($_GET['page']))
        $action = $_GET['page'];

    switch ($action) {
        case "home":
            include 'home.php';
            break;

        case "product-list":
            include 'product/list.php';
            break;
        case "product-detail":
            include 'product/detail.php';
            break;


        case "about":
            include 'about.php';
            break;
        case "contact":
            include 'contact.php';
            break;
        case "post":
            include 'post.php';
            break;

        case "logout":
            unset($_SESSION['admin']);
            header("location: index.php");
            break;
        default:
            include 'home.php';
    }
    ?>


<!-- Start Footer Section -->
<?php include 'components/footer.php'; ?>
<!-- End Footer Section -->


<script src="../../../public/client/js/bootstrap.bundle.min.js"></script>
<script src="../../../public/client/js/tiny-slider.js"></script>
<script src="../../../public/client/js/custom.js"></script>
</body>

</html>